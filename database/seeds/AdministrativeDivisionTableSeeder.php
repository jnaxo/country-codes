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

        $today = date('Y-m-d H:i:s');
        $data = [
            ['name' => 'Tarapacá', 'code' => 'TA', 'tag' => 'I'],
            ['name' => 'Antofagasta', 'code' => 'AN', 'tag' => 'II'],
            ['name' => 'Atacama', 'code' => 'AT', 'tag' => 'III'],
            ['name' => 'Coquimbo', 'code' => 'CO', 'tag' => 'IV'],
            ['name' => 'Valparaíso', 'code' => 'VS', 'tag' => 'V'],
            [
                'name' => "Libertador Gral. Bernardo O'higgins",
                'code' => 'LI',
                'tag' => 'VI'
            ],
            ['name' => 'Maule', 'code' => 'ML', 'tag' => 'VII'],
            ['name' => 'BioBio', 'code' => 'BI', 'tag' => 'VIII'],
            ['name' => 'Araucania', 'code' => 'AR', 'tag' => 'IX'],
            ['name' => 'Los Lagos', 'code' => 'LL', 'tag' => 'X'],
            [
                'name' => 'Aysén del Gral. Carlos Ibáñez del Campo',
                'code' => 'AI',
                'tag' => 'XI'
            ],
            ['name' => 'Magallanes', 'code' => 'MA', 'tag' => 'XII'],
            ['name' => 'Metropolitana', 'code' => 'RM', 'tag' => 'XIII'],
            ['name' => 'Los Ríos', 'code' => 'LR', 'tag' => 'XIV'],
            ['name' => 'Arica y Parinacota', 'code' => 'AP', 'tag' => 'XV']
        ];

        foreach ($data as $i => $ad) {
            DB::table('administrative_divisions')->insert([
                'id' => $i + 1,
                'country_id' => 152,
                'name' => $ad['name'],
                'code' => $ad['code'],
                'tag' => $ad['tag'],
                'administrative_division_kind_id' => 1,
                'created_at' => $today,
                'updated_at' => $today,
            ]);
        }
    }
}
