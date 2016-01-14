<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Http\Request;
use Jnaxo\CountryCodes\Store\ApiManager;
use Jnaxo\CountryCodes\Store\CountryAdapter;


class CountryStore extends ApiManager
{

    public function Response(Request $request, $id)
    {
        $uri = $request->path();
        $method = $request->method();

        if ($request->is('countries'))
        {
            if ($request->has('filter'))
            {
                $zones = CountryAdapter::zoneByName($request->filter);
            } else
            {
                $zones = CountryAdapter::zones();
            }
            return $this->apiOutput(function () use ($zones)
                    {
                        $data = array();
                        foreach ($zones as $i => $zone)
                        {
                            $tmp_data[$i] = [
                                'zone' => $zone->name,
                                'countries' => CountryAdapter::getByZone($zone)
                            ];
                            array_push($data, $tmp_data[$i]);
                        }
                        return $data;
                    });
        } elseif ($request->is('countries/*'))
        {
            $country = CountryAdapter::getById($id);
            return $this->apiOutput(function () use ($country)
                    {
                        $zone = CountryAdapter::zoneById($country->zone_id);

                        $country_data = [
                            'id' => intval($country->numeric_code),
                            'name' => $country->name,
                            'zone' => $zone->name,
                            'alpha2' => $country->alpha2,
                            'alpha3' => $country->alpha3
                        ];
                        return $country_data;
                    });
        } else
        {
            dd('error');
        }
    }

}
