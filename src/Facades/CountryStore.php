<?php

namespace Jnaxo\CountryCodes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the country facade class.
 *
 */
class Country extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bank-codes.country';
    }
}