<?php

namespace Jnaxo\Store\CountryAdapter;

use DB;
/**
 * This is the country adapter class. Manage connection to database
 *
 * @author J. Igancio Fuentes <jfuentes@zeek.cl>
 */

class CountryAdapter{
    
     /**
     * Get an instance of Country.
     *
     * @param id
     *
     * @return null|Country
     */
    
     public function zones()
     {
         return $country = DB::table('zones')->get();
     }


     public function getById($id){
          return $country = DB::table('countries')->where('id',$id)->get();
     }
     
     public function getByName($name){
         return $country = DB::table('countries')->where('name',$name)->get();
     }
    
     public function getByZone($zone){
         return $country = DB::table('countries')->where('zone',$zone)->get();
     }
     
     public function getByCode($code , $format = 'alpha2'){
         if($format == 'alpha2'){
             
         }elseif ('alpha3')
        {
            
        }
     }
}