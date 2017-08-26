<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Database\Eloquent\Model;
use Jnaxo\CountryCodes\Country;
use Jnaxo\CountryCodes\City;
use Jnaxo\CountryCodes\AdministrativeDivision;

class AdministrativeArea extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctrystore_administrative_areas';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['admin_division_id', 'administrativeDivision'];

     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['kind', 'administrative_area_level'];

    /**
     * The resources names allowed to include.
     *
     * @var array
     */
    protected static $includable = ['cities'];

    /* Relationships */

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function administrativeDivision()
    {
        return $this->belongsTo(
            AdministrativeDivision::class,
            'admin_division_id'
        );
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'admin_area_id');
    }

    /* Accessors */

    public function getKindAttribute()
    {
        $admin_division = $this->administrativeDivision;
        return $admin_division ? $admin_division->name : null;
    }

    public function getAdministrativeAreaLevelAttribute()
    {
        $admin_division = $this->administrativeDivision;
        return $admin_division ? $admin_division->level : null;
    }

    /* Helpers */

    /**
     * Check if resource is related with the model. Then is allowed include into
     * response.
     *
     * @param string $resource
     * @return boolean
     */
    public static function isIncludable($resource)
    {
        return in_array($resource, self::$includable);
    }
}
