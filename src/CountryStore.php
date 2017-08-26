<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Http\Request;
use Jnaxo\CountryCodes\Store\ApiManager;
use Jnaxo\CountryCodes\Store\api\Collection;
use Jnaxo\CountryCodes\Country;
use Jnaxo\CountryCodes\AdministrativeArea;
use Jnaxo\CountryCodes\City;
use Route;

class CountryStore extends ApiManager
{

    /**
     * Set routes for country API
     *
     * @return void
     */
    public function routes()
    {
        Route::get('countries/{id}', function ($id) {
            $request = request();
            return CountryStore::country($id, $request);
        })->name('country');

        Route::get('countries', function () {
            $request = request();
            return CountryStore::countries($request);
        })->name('countries');

        Route::get('administrative_areas/{id}', function ($id) {
            $request = request();
            return CountryStore::administrativeArea($id, $request);
        })->name('administrative_area');

        Route::get('cities/{city_id}', function ($city_id) {
                $request = request();
                return CountryStore::city($city_id, $request);
        })->name('city');
    }

    /**
     * Get Country item. Optional include administrative areas
     *
     * @param int $country_id
     * @param Illuminate\Http\Request $request
     * @return mixed Jnaxo\CountryCodes\Country item
     */
    public function country($country_id, Request $request = null)
    {
        $country = Country::find($country_id);

        if ($request) {
            $included = [];
            $query = $country->getInlcudeResources($request->include);
            if ($query) {
                $collection = new Collection(
                    $query,
                    str_singular($request->include)
                );
                $included = $collection->toArray();
            }
            $links = $request ? ['self' => $request->url()] : [];
            return $this->respondWithItem(
                $country,
                'country',
                $links,
                $included
            );
        }
        return $country;
    }

    /**
     * Get Country list
     *
     * @param Illuminate\Http\Request $request
     * @return mixed Jnaxo\CountryCodes\Country collection
     */
    public function countries(Request $request = null)
    {
        $query = Country::with('zone');

        if ($request) {
            $resource = new Collection($query, 'country', $request);
            return $this->respondWithCollection($resource);
        }
        return $query->get();
    }

    /**
     * Get Administrative area item, optional include cities
     *
     * @param int $admin_area_id
     * @param Illuminate\Http\Request $request
     * @return mixed Jnaxo\CountryCodes\AdministrativeArea item
     */
    public function administrativeArea($admin_area_id, Request $request = null)
    {
        $admin_area = AdministrativeArea::find($admin_area_id);

        if ($request) {
            $included = [];
            if (
            $request->has('include') &&
            AdministrativeArea::isIncludable($request->include)
            ) {
                $cities = $admin_area->cities()->getQuery();
                $cities_included = new Collection($cities, 'city');
                $included = $cities_included->toArray();
            }
            $links = $request ? ['self' => $request->url()] : [];
            return $this->respondWithItem(
                $admin_area,
                'administrative_area',
                $links,
                $included
            );
        }
        return $admin_area;
    }

    /**
     * Get Administrative areas collection of a country given
     *
     * @param int $country_id
     * @param Illuminate\Http\Request $request
     * @return mixed Jnaxo\CountryCodes\AdministrativeArea collection
     */
    public function administrativeAreas($country_id, Request $request = null)
    {
        $query = AdministrativeArea::where('country_id', $country_id)
            ->with('country');

        if ($request) {
            $resource = new Collection($query, 'administrative_area', $request);
            return $this->respondWithCollection($resource);
        }
        return $query->get();
    }

    /**
     * Get city item, optional include administrative division.
     *
     * @param int $city_id
     * @param Illuminate\Http\Request $request
     * @return mixed Jnaxo\CountryCodes\City item
     */
    public function city($city_id, Request $request = null)
    {
        $city = City::find($city_id);

        if ($request) {
            $included = [];
            $query = $city->getInlcudeResources($request->include);
            if ($query) {
                $collection = new Collection($query, $request->include);
                $included = $collection->toArray();
            }
            $links = $request ? ['self' => $request->url()] : [];
            return $this->respondWithItem($city, 'city', $links, $included);
        }
        return $city;
    }

    /**
     * Get country cities
     *
     * @param int $country_id
     * @param Illuminate\Http\Request $request
     * @return mixed Jnaxo\CountryCodes\City collection
     */
    public function cities($country_id, Request $request = null)
    {
        $query = City::with([
                'administrativeArea' => function ($q) use ($country_id) {
                    $q->where('country_id', $country_id);
                }
            ])
            ->with('administrativeArea.country');

        if ($request) {
            $resource = new Collection($query, 'city', $request);
            return $this->respondWithCollection($resource);
        }
        return $query->get();
    }
}
