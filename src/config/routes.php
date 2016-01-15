<?php
/*
  |--------------------------------------------------------------------------
  | Country Codes Routes
  |--------------------------------------------------------------------------
  |
  | This route return a JSON response of country codes package.
  |
 */

Route::get('countries/{id?}', function ($id = null)
{
    $request = request();
    return CountryStore::Response($request, $id);
});
