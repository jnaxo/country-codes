<?php

namespace Jnaxo\CountryCodes\Store;

use DB;
/**
 * This is the country adapter class. Manage connection to database
 *
 * @author J. Igancio Fuentes <jfuentes@zeek.cl>
 */

class CountryAdapter{

     /**
     * Get a list of Zones.
     *
     * @return null| list of Zone
     */

     public static function zones()
     {
         return $zones = DB::table('zones')->get();
     }

     public static function zoneByName($name)
     {
         return $zone = DB::table('zones')->where('name', $name)->get();
     }

     public static function zoneById($id){
         $zone = DB::table('zones')->where('id', $id)->get();
         return $zone[0];
     }

     public static function getById($id){
          $country = DB::table('countries')->where('numeric_code',$id)->get();
          return $country[0];
     }

     public static function getByName($name){
         return $country = DB::table('countries')->where('name',$name)->get();
     }

     public static function getByZone($zone){
         return $country = DB::table('countries')->where('zone_id',$zone->id)->get();
     }

     public static function getByCode($code , $format = 'alpha2'){
         if($format == 'alpha2'){

         }elseif ('alpha3')
        {

        }
     }
}
