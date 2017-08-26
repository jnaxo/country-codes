<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Database\Eloquent\Model;
use Jnaxo\CountryCodes\Zone;
use Jnaxo\CountryCodes\AdministrativeArea;
use Jnaxo\CountryCodes\City;

class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctrystore_countries';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['zone_id'];

    /**
     * The resources names allowed to include.
     *
     * @var array
     */
    protected $includable = ['administrative_areas', 'cities'];

    /* Relationships */

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function administrativeAreas()
    {
        return $this->hasMany(AdministrativeArea::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(
            City::class, AdministrativeArea::class,
            'country_id', 'admin_area_id', 'id'
        );
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
            case 'administrative_areas':
                return $this->administrativeAreas()->getQuery();
            case 'cities':
                return $this->cities()->getQuery()->select("ctrystore_cities.*");
        }
        return false;
    }
}
