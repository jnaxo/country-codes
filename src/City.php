<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Database\Eloquent\Model;
use Jnaxo\CountryCodes\AdministrativeArea;

class City extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctrystore_cities';

    /**
     * The resources names allowed to include.
     *
     * @var array
     */
    protected $includable = ['country', 'administrative_area'];

    /* Relationships */

    public function administrativeArea()
    {
        return $this->belongsTo(AdministrativeArea::class, 'admin_area_id');
    }

    /* Helpers */

    /**
     * Check if resource is related with the model. Then return resource query.
     *
     * @param string $resource
     * @return boolean
     */
    public function getInlcudeResources($resource)
    {
        switch ($resource) {
            case 'administrative_area':
                return $this->administrativeArea()->getQuery();
        }
        return false;
    }
}
