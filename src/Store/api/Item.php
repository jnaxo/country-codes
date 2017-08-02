<?php

namespace Jnaxo\CountryCodes\Store\api;

class Item
{

    protected $response;
    protected $data;

    /**
     * Construct
     *
     * @param resource $item
     */
    public function __construct(
        $item,
        $resource_name,
        $links = [],
        $included = []
    ) {
        if (empty($resource_name)) {
            $resource_name = 'undefined';
        }

        if (isset($item->id)) {
            $id = $item->id;
            unset($item->id);
        }

        $data = [
            'type' => $resource_name,
            'id' => $id,
            'attributes' => $item
        ];

        $response = [];

        if ($links) {
            $response = ['links' => $links];
        }

        $response['data'] = $data;

        if (!empty($included)) {
            $response['included'] = $included;
        }

        $this->response = $response;
        $this->data = $data;
    }

    /**
     *
     * @return Item like array
     */
    public function toArray()
    {
        return $this->response;
    }

    /**
     *
     * @return Array
     */
    public function getData()
    {
        return $this->data;
    }
}

