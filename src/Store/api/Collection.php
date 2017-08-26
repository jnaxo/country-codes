<?php

namespace Jnaxo\CountryCodes\Store\api;

use Illuminate\Database\Eloquent\Builder;
use Jnaxo\CountryCodes\Store\api\Paginator;
use Jnaxo\CountryCodes\Store\api\Item;

class Collection
{

    /* Resource */
    protected $resource_name;

    /* Response collection */
    protected $response;

    /* Data Collection */
    protected $collection;
    protected $data;

    /* Paginate */
    protected $offset;
    protected $limit;

    /* links */
    protected $url;
    protected $full_url;

    /**
     * Construct
     */
    public function __construct(
        Builder $query,
        $resource_name,
        $request = [],
        $included = []
    ) {
        if ($request) {
            $this->offset = $request->page['offset'] ? $request->page['offset'] : 0;
            $this->limit = $request->page['limit'] ? $request->page['limit'] : 50;
            $paginator = new Paginator($query, $this->offset, $this->limit);
            $paginator->paginate();

            $links = ['self' => urldecode($request->fullUrl())];

            if ($this->offset > 0) {
                $links['first'] = $request->url() . $paginator->getFirstPageParams();
                $links['prev'] = $request->url(). $paginator->getPrevPageParams();
            }

            if ($paginator->getNextPageParams()) {
                $links['next'] = $request->url() . $paginator->getNextPageParams();
                $links['last'] = $request->url() . $paginator->getLastPageParams();
            }

            $response = ['links' => $links];
        }

        $collection = $query->get();
        $this->setData($collection, $resource_name);

        $response['data'] = $this->data;

        if (!empty($included)) {
            $response['included'] = $included;
        }

        $this->response = $response;
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
     * Set collection data
     *
     * @param type $collection
     * @param string $resource_name
     */
    public function setData($collection, $resource_name = '')
    {
        $this->collection = collect();

        if (!$this->resource_name) {
            $this->resource_name = empty($resource_name) ? 'undefined' : $resource_name;
        }

        $this->data = [];
        
        foreach ($collection as $item) {
            $this->collection->push(clone $item);
            $i = new Item($item, $this->resource_name);
            array_push($this->data, $i->getData());
        }
        $this->response['data'] = $this->data;
    }

    public function getCollection()
    {
        return $this->collection;
    }

    public function setIncluded($included)
    {
        $response = $this->response;
        $response['included'] = $included;
        $this->response = $response;
    }

    public function unique($key)
    {
        return $this->collection->unique($key);
    }
}
