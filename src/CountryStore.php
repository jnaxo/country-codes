<?php

namespace Jnaxo\CountryStore;

use Illuminate\Http\Request;
use Jnaxo\Store\ApiManager;
use Jnaxo\Store\CountryAdapter;

/*
 * facade
 */

class CountryStore extends ApiManager
{

    public function Response(Request $request)
    {
        $uri = $request->path();
        $method = $request->method();

        if ($request->is('countries'))
        {
            if ($request->has('filter'))
            {
                
            } else
            {
                $zones = CountryAdapter::zones();
                return $this->apiOutput($this->all($zones));
            }
        } elseif ($request->is('countries/*'))
        {
            $countries = CountryAdapter::getById($request->input('id'));
            return $this->apiOutput($this->get($countries));
        } else
        {
            
        }

        
    }

    public function all($zones)
    {
        $data = array();
        foreach ($zones as $i => $zone)
        {
            $tmp_data[$i] = [
                'zone' => $zone->name,
                'countries' => CountryAdapter::getByZone($zone->countries)
            ];
            array_push($data, $tmp_data[$i]);
        }
        return $data;
    }

    public function get($id)
    {
        
    }

}
