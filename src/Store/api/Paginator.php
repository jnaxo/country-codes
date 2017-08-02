<?php

namespace Jnaxo\CountryCodes\Store\api;

class Paginator
{
    /** Set the offset from the first value to get */
    protected $offset;

    /** Set a limit of results */
    protected $limit;

    /** Have the count of results */
    protected $count;

    /** Collection with the query */
    protected $query;

    /* params keys */
    protected $offset_key;
    protected $limit_key;

    public function __construct($query, $offset = null, $limit = null)
    {
        $this->query = $query;
        $this->count = 0;
        $this->offset = intval($offset) ?: 0;
        $this->limit = intval($limit) ?: null;
        $this->offset_key = '?page[offset]=';
        $this->limit_key = '&page[limit]=';
    }

    /**
     * Set the offset
     *
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * Set the limit
     *
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * Get the query
     *
     */
    public function get()
    {
        return $this->query->get();
    }

    /**
     * Will modify a query builder to get paginated data and will
     * return an array with the meta data.
     *
     * @param Illuminate\Database\Query\Builder $query
     *
     * @return array
     */
    public function paginate()
    {
        $this->count = $this->query->get()->count();
        $this->limit = $this->limit ?: $this->count;
        $this->query->skip($this->offset)->take($this->limit);
    }

    /**
     * Generate the next page url parameters as string.
     *
     * @param int $count
     * @param int $currentOffset
     * @param int $limit
     *
     * @return string
     */
    public function getNextPageParams()
    {
        $limit = $this->limit <= 0 ? $this->count : $this->limit;
        $next_url = $this->offset_key
            . $this->offset
            . $this->limit_key
            . $limit;

        if ($this->count <= ($this->offset + $limit)) {
           return false;
        }

        if ($this->count >= $limit) {
            $next_url = $this->offset_key
                . ($this->offset + $limit)
                . $this->limit_key
                . $limit;
        }

        return $next_url;
    }

    /**
     * Generate the prev page url parameters as string.
     *
     * @param int $count
     * @param int $currentOffset
     * @param int $limit
     *
     * @return string
     */
    public function getPrevPageParams()
    {
        $limit = $this->limit <= 0 ? $this->count : $this->limit;
        $prev_url = $this->offset_key
            . $this->offset
            . $this->limit_key
            . $limit;

        if ($this->count >= $limit) {
            $prev_url = $this->offset_key
                . ($this->offset - $limit)
                . $this->limit_key
                . $limit;
        }
        if ($this->count <= ($this->offset - $limit)) {
            $prev_url = $this->offset_key
                . $this->offset
                . $this->limit_key
                . $limit;
        }
        return $prev_url;
    }

    /**
     * Generate the last page url parameters as string.
     *
     * @param int $count
     * @param int $currentOffset
     * @param int $limit
     *
     * @return string
     */
    public function getLastPageParams()
    {
        $limit = $this->limit <= 0 ? $this->count : $this->limit;
        $last_page = intdiv(intval($this->count), intval($limit));
        $last_url = $this->offset_key
            . ($last_page * $limit)
            . $this->limit_key
            . $limit;

        return $last_url;
    }

    /**
     * Generate the first page url parameters as string.
     *
     * @param int $count
     * @param int $currentOffset
     * @param int $limit
     *
     * @return string
     */
    public function getFirstPageParams()
    {
        $limit = $this->limit <= 0 ? $this->count : $this->limit;
        $first_url = $this->offset_key . '0' . $this->limit_key . $limit;

        return $first_url;
    }

    /**
     * Get a json encoded array with pagination metadata
     *
     */
    public function getPaginationMetaData()
    {
        $pagination = [
            'count' => $this->count,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'next_page_params' => $this->getNextPageParams(),
        ];

        return $pagination;
    }
}
