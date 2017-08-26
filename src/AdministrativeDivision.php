<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Database\Eloquent\Model;
use Jnaxo\CountryCodes\AdministrativeArea;

class AdministrativeDivision extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctrystore_administrative_divisions';

    /* Relationships */

    public function administrativeAreas()
    {
        return $this->hasMany(AdministrativeArea::class);
    }
}
