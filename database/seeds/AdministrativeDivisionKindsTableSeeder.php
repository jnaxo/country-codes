<?php

use Illuminate\Database\Seeder;

class AdministrativeDivisionKindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrative_division_kinds')->delete();
        DB::table('administrative_division_kinds')->insert([
            'id' => 1,
            'level' => 1,
            'name' => 'Región',
            'country_id' => 152,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
