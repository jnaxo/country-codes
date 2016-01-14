<?php

use Illuminate\Database\Seeder;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->delete();

        DB::table('zones')->insert(['id' => "1", 'name' => "europe"]);
        DB::table('zones')->insert(['id' => "2", 'name' => "near east"]);
        DB::table('zones')->insert(['id' => "3", 'name' => "caribbean"]);
        DB::table('zones')->insert(['id' => "4", 'name' => "sub-saharan africa"]);
        DB::table('zones')->insert(['id' => "5", 'name' => "antarctica"]);
        DB::table('zones')->insert(['id' => "6", 'name' => "latam"]);
        DB::table('zones')->insert(['id' => "7", 'name' => "oceania"]);
        DB::table('zones')->insert(['id' => "8", 'name' => "south asia"]);
        DB::table('zones')->insert(['id' => "9", 'name' => "far east"]);
        DB::table('zones')->insert(['id' => "10", 'name' => "atlantic ocean"]);
        DB::table('zones')->insert(['id' => "11", 'name' => "north america"]);
        DB::table('zones')->insert(['id' => "12", 'name' => "maghreb"]);
        DB::table('zones')->insert(['id' => "13", 'name' => "greenland"]);
        DB::table('zones')->insert(['id' => "14", 'name' => "indian ocean"]);
        DB::table('zones')->insert(['id' => "15", 'name' => "southeast asia"]);
        DB::table('zones')->insert(['id' => "16", 'name' => "north africa"]);
    }
}
