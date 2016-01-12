<?php

use Illuminate\Database\Seeder;
use App\Zone;

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

        Zone::create(['id' => "1", 'name' => "europe"]);
        Zone::create(['id' => "2", 'name' => "near east"]);
        Zone::create(['id' => "3", 'name' => "caribbean"]);
        Zone::create(['id' => "4", 'name' => "sub-saharan africa"]);
        Zone::create(['id' => "5", 'name' => "antarctica"]);
        Zone::create(['id' => "6", 'name' => "latam"]);
        Zone::create(['id' => "7", 'name' => "oceania"]);
        Zone::create(['id' => "8", 'name' => "south asia"]);
        Zone::create(['id' => "9", 'name' => "far east"]);
        Zone::create(['id' => "10", 'name' => "atlantic ocean"]);
        Zone::create(['id' => "11", 'name' => "north america"]);
        Zone::create(['id' => "12", 'name' => "maghreb"]);
        Zone::create(['id' => "13", 'name' => "greenland"]);
        Zone::create(['id' => "14", 'name' => "indian ocean"]);
        Zone::create(['id' => "15", 'name' => "southeast asia"]);
        Zone::create(['id' => "16", 'name' => "north africa"]);
    }
}
