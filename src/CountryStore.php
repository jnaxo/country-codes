<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Http\Request;
use Jnaxo\CountryCodes\Store\ApiManager;

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

        Route::get('administrative_divisions/{id}', function ($id) {
            $request = request();
            return CountryStore::administrativeDivision($id, $request);
        })->name('administrative_division');

        Route::get('countries/{country_id}/cities/{city_id}', function (
                $country_id,
                $city_id
            ) {
                $request = request();
                return CountryStore::city($country_id, $city_id, $request);
        })->name('countries.citiy');
    }

    /**
     * Get Country item, include administrative divisions
     *
     * @param $country_id
     * @param Request $request
     */
    public function country($country_id, Request $request = null)
    {
        $links = $request ? ['self' => $request->url()] : [];
        $country = $this
                ->getCountries()
                ->where('countries.id', $country_id)
                ->first();

        $administrative_divisions = $this
                ->getAdministrativeDivisions()
                ->where('administrative_divisions.country_id',$country_id);

        $ad_included = new Collection(
                $administrative_divisions,
                'administrative_division'
            );

        return $this->respondWithItem(
                $country,
                'country',
                $links,
                $ad_included->toArray()
            );
    }

    /**
     * Get Country list
     *
     * @param Request $request
     */
    public function countries(Request $request = null)
    {
        $query = $this->getCountries();
        $resource = new Collection($query, 'country', $request);

        return $this->respondWithCollection($resource);
    }

    /**
     * Get Administrative division item, include cities
     *
     * @param $admin_division_id
     * @param Request $request
     */
    public function administrativeDivision($admin_division_id, Request $request = null) {
        $links = $request ? ['self' => $request->url()] : [];
        $admin_division = $this
                ->getAdministrativeDivisions()
                ->where('administrative_divisions.id', $admin_division_id)
                ->first();

        $cities = $this->getCitiesOfAD($admin_division_id);
        $cities_included = new Collection($cities, 'city');

        return $this->respondWithItem(
                $admin_division,
                'administrative_division',
                $links,
                $cities_included->toArray()
            );
    }

    /**
     * Get city item, include country and administrative division.
     *
     * @param $country_id
     * @param $city_id
     * @param Request $request
     */
    public function city($country_id, $city_id, Request $request = null)
    {
        $included = [];
        $links = $request ? ['self' => $request->url()] : [];
        $city = $this->getCityWithAD($city_id)->first();

        $country = $this
                ->getCountries()
                ->where('countries.id', $country_id)
                ->first();

        $admin_division = $this
                ->getAdministrativeDivisions()
                ->where('administrative_divisions.id', $city->ad_id)
                ->first();

        unset($city->ad_id);

        $city->country = $country->alpha2;
        $country_included = new Item($country, 'country');
        $ad_included = new Item($admin_division, 'administrative_division');
        array_push($included, $country_included->getData());
        array_push($included, $ad_included->getData());

        return $this->respondWithItem($city, 'city', $links, $included);
    }

    /* Scopes */

    private function getCountries()
    {
        return DB::table('countries')
                ->join('zones', 'zones.id', '=', 'countries.zone_id')
                ->select('countries.id')
                ->addSelect('countries.id as numeric_code')
                ->addSelect('zones.name as zone')
                ->addSelect('countries.name')
                ->addSelect('countries.alpha2')
                ->addSelect('countries.alpha3');
    }

    private function getAdministrativeDivisions()
    {
        return DB::table('administrative_divisions')
                ->join(
                    'countries',
                    'countries.id',
                    '=',
                    'administrative_divisions.country_id'
                )
                ->join(
                    'administrative_division_kinds',
                    'administrative_division_kinds.id',
                    '=',
                    'administrative_divisions.administrative_division_kind_id'
                )
                ->addSelect('administrative_divisions.id')
                ->addSelect('administrative_divisions.code')
                ->addSelect('administrative_division_kinds.name as type')
                ->addSelect('administrative_divisions.name')
                ->addSelect('administrative_divisions.tag')
                ->addSelect('countries.alpha2 as country');
    }

    private function getCitiesOfAD($ad_id)
    {
        return DB::table('cities')
                ->where('cities.administrative_division_id', $ad_id)
                ->select('cities.id')
                ->addSelect('cities.name');
    }

    private function getCityWithAD($city_id)
    {
        return DB::table('cities')
                ->join(
                    'administrative_divisions',
                    'administrative_divisions.id',
                    '=',
                    'cities.administrative_division_id'
                )
                ->where('cities.id', $city_id)
                ->select('cities.id')
                ->addSelect('cities.name')
                ->addSelect(
                    'administrative_divisions.code as administrative_division'
                )
                ->addSelect('administrative_divisions.id as ad_id');
    }
}
