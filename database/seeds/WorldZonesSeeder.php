<?php

use Illuminate\Database\Seeder;

class WorldZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ctrystore_zones')->delete();

        $today = date('Y-m-d H:i:s');

        $zones = [
            1 => 'europe',
            2 => 'near east',
            3 => 'caribbean',
            4 => 'sub-saharan africa',
            5 => 'antartica',
            6 => 'latam',
            7 => 'oceania',
            8 => 'south asia',
            9 => 'far east',
            10 => 'atlantic ocean',
            11 => 'north america',
            12 => 'maghreb',
            13 => 'greenland',
            14 => 'indian ocean',
            15 => 'southeast asia',
            16 => 'north africa'
        ];

        foreach ($zones as $i => $zone ) {
            DB::table('ctrystore_zones')->insert([
                'id' => $i,
                'name' => $zone,
                'created_at' => $today,
                'updated_at' => $today,
            ]);
        }
    }
}
