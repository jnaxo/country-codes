<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Database\Eloquent\Model;
use Jnaxo\CountryCodes\Country;

class Zone extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctrystore_zones';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /* Relationships */

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
