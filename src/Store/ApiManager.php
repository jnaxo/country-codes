<?php

namespace Jnaxo\CountryCodes\Store;

use Jnaxo\CountryCodes\Store\api\Item;
use Jnaxo\CountryCodes\Store\api\Collection;

class ApiManager
{

    /**
     * Response with item
     *
     * @param Object $item
     * @param $resource_name
     * @param array $links
     * @param array $included
     * @return Json Object
     */
    protected function respondWithItem(
        $item,
        $resource_name = '',
        array $links = [],
        array $included = []
    ) {
        $resource = new Item($item, $resource_name, $links, $included);
        return $this->respondWithArray($resource->toArray());
    }

    /**
     * Response with collection
     *
     * @param Jnaxo\CountryCodes\Store\api\Collection $resource
     * @return Json Object
     */
    protected function respondWithCollection(Collection $resource)
    {
        return $this->respondWithArray($resource->toArray());
    }

    /**
     * Get Json reponse
     *
     * @param array $array
     * @param array $headers
     * @return Json Response
     */
    private function respondWithArray(array $array, array $headers = [])
    {
        if (!$headers) {
            $headers = ['Content-Type' => 'application/json'];
        }
        return response()->json($array)->withHeaders($headers);
    }
}
