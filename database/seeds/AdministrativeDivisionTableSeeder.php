<?php

use Illuminate\Database\Seeder;

class AdministrativeDivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrative_divisions')->delete();

        DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Tarapacá", 'code' => 'TA']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Antofagasta", 'code' => 'AN']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Atacama", 'code' => 'AT']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Coquimbo", 'code' => 'CO']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Valparaíso", 'code' => 'VS']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Libertador Gral. Bernardo O'higgins", 'code' => 'LI']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Maule", 'code' => 'ML']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "BioBio", 'code' => 'BI']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Araucania", 'code' => 'AR']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Los Lagos", 'code' => 'LL']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Aysén del Gral. Carlos Ibáñez del Campo", 'code' => 'AI']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Magallanes", 'code' => 'MA']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Metropolitana", 'code' => 'RM']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Los Ríos", 'code' => 'LR']);
    		DB::table('administrative_divisions')->insert(['country_id' => 152, 'administrative_division_id' => '', 'name' => "Arica y Parinacota", 'code' => 'AP']);

    }
}
