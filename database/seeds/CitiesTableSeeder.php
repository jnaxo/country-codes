<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $today = date('Y-m-d H:i:s');
        $data = [
            ['ad_id' => 5, 'name' => 'Algarrobo'],
            ['ad_id' => 13, 'name' => 'Alhue'],
            ['ad_id' => 8, 'name' => 'Alto BioBío'],
            ['ad_id' => 3, 'name' => 'Alto del Carmen'],
            ['ad_id' => 1, 'name' => 'Alto Hospicio'],
            ['ad_id' => 10, 'name' => 'Ancud'],
            ['ad_id' => 4, 'name' => 'Andacollo'],
            ['ad_id' => 9, 'name' => 'Angol'],
            ['ad_id' => 2, 'name' => 'Antofagasta'],
            ['ad_id' => 8, 'name' => 'Antuco'],
            ['ad_id' => 8, 'name' => 'Arauco'],
            ['ad_id' => 15, 'name' => 'Arica'],
            ['ad_id' => 13, 'name' => 'Buin'],
            ['ad_id' => 16, 'name' => 'Bulnes'],
            ['ad_id' => 5, 'name' => 'Cabildo'],
            ['ad_id' => 12, 'name' => 'Cabo de Hornos'],
            ['ad_id' => 8, 'name' => 'Cabrero'],
            ['ad_id' => 2, 'name' => 'Calama'],
            ['ad_id' => 10, 'name' => 'Antártica'],
            ['ad_id' => 10, 'name' => 'Calbuco'],
            ['ad_id' => 3, 'name' => 'Caldera'],
            ['ad_id' => 13, 'name' => 'Calera de Tango'],
            ['ad_id' => 5, 'name' => 'Calle Larga'],
            ['ad_id' => 15, 'name' => 'Camarones'],
            ['ad_id' => 1, 'name' => 'Camiña'],
            ['ad_id' => 4, 'name' => 'Canela'],
            ['ad_id' => 8, 'name' => 'Cañete'],
            ['ad_id' => 9, 'name' => 'Carahue'],
            ['ad_id' => 5, 'name' => 'Carnameena'],
            ['ad_id' => 5, 'name' => 'Casablanca'],
            ['ad_id' => 10, 'name' => 'Castro'],
            ['ad_id' => 5, 'name' => 'Catemu'],
            ['ad_id' => 7, 'name' => 'Cauquenes'],
            ['ad_id' => 13, 'name' => 'Cerrillos'],
            ['ad_id' => 13, 'name' => 'Cerro Navia'],
            ['ad_id' => 10, 'name' => 'Chaiten'],
            ['ad_id' => 3, 'name' => 'Chañaral'],
            ['ad_id' => 7, 'name' => 'Chanco'],
            ['ad_id' => 6, 'name' => 'Chépica'],
            ['ad_id' => 8, 'name' => 'Chiguayante'],
            ['ad_id' => 11, 'name' => 'Chile Chico'],
            ['ad_id' => 16, 'name' => 'Chillan'],
            ['ad_id' => 16, 'name' => 'Chillan Viejo'],
            ['ad_id' => 6, 'name' => 'Chimbarongo'],
            ['ad_id' => 9, 'name' => 'Cholchol'],
            ['ad_id' => 10, 'name' => 'Chonchi'],
            ['ad_id' => 16, 'name' => 'Cobquecura'],
            ['ad_id' => 10, 'name' => 'Cochamó'],
            ['ad_id' => 11, 'name' => 'Cochrane'],
            ['ad_id' => 6, 'name' => 'Codegua'],
            ['ad_id' => 16, 'name' => 'Coelemu'],
            ['ad_id' => 16, 'name' => 'Coihueco'],
            ['ad_id' => 6, 'name' => 'Coinco'],
            ['ad_id' => 7, 'name' => 'Colbun'],
            ['ad_id' => 1, 'name' => 'Colchane'],
            ['ad_id' => 13, 'name' => 'Colina'],
            ['ad_id' => 9, 'name' => 'Collipulli'],
            ['ad_id' => 6, 'name' => 'Coltauco'],
            ['ad_id' => 4, 'name' => 'Combarbalá'],
            ['ad_id' => 8, 'name' => 'Concepcion'],
            ['ad_id' => 13, 'name' => 'Conchali'],
            ['ad_id' => 5, 'name' => 'Concón'],
            ['ad_id' => 7, 'name' => 'Constitucion'],
            ['ad_id' => 8, 'name' => 'Contulmo'],
            ['ad_id' => 3, 'name' => 'Copiapó'],
            ['ad_id' => 4, 'name' => 'Coquimbo'],
            ['ad_id' => 8, 'name' => 'Coronel'],
            ['ad_id' => 11, 'name' => 'Coyhaique'],
            ['ad_id' => 9, 'name' => 'Cunco'],
            ['ad_id' => 9, 'name' => 'Curacautin'],
            ['ad_id' => 13, 'name' => 'Curacavi'],
            ['ad_id' => 10, 'name' => 'Curaco de Velez'],
            ['ad_id' => 8, 'name' => 'Curanilahue'],
            ['ad_id' => 9, 'name' => 'Curarrehue'],
            ['ad_id' => 7, 'name' => 'Curepto'],
            ['ad_id' => 7, 'name' => 'Curico'],
            ['ad_id' => 10, 'name' => 'Dalcahue'],
            ['ad_id' => 3, 'name' => 'Diego de Almagro'],
            ['ad_id' => 6, 'name' => 'Doñihue'],
            ['ad_id' => 13, 'name' => 'El Bosque'],
            ['ad_id' => 16, 'name' => 'El Carmen'],
            ['ad_id' => 13, 'name' => 'El Monte'],
            ['ad_id' => 5, 'name' => 'El Quisco'],
            ['ad_id' => 5, 'name' => 'El Tabo'],
            ['ad_id' => 7, 'name' => 'Empedrado'],
            ['ad_id' => 9, 'name' => 'Ercilla'],
            ['ad_id' => 13, 'name' => 'Estacion Central'],
            ['ad_id' => 8, 'name' => 'Florida'],
            ['ad_id' => 9, 'name' => 'Freire'],
            ['ad_id' => 3, 'name' => 'Freirina'],
            ['ad_id' => 10, 'name' => 'Fresia'],
            ['ad_id' => 10, 'name' => 'Frutillar'],
            ['ad_id' => 10, 'name' => 'Futaleufu'],
            ['ad_id' => 9, 'name' => 'Galvarino'],
            ['ad_id' => 15, 'name' => 'General Lagos'],
            ['ad_id' => 9, 'name' => 'Gorbea'],
            ['ad_id' => 6, 'name' => 'Graneros'],
            ['ad_id' => 11, 'name' => 'Guaitecas'],
            ['ad_id' => 5, 'name' => 'Hijuelas'],
            ['ad_id' => 10, 'name' => 'Hualaihue'],
            ['ad_id' => 11, 'name' => 'Puerto Cisnes'],
            ['ad_id' => 7, 'name' => 'Hualañé'],
            ['ad_id' => 8, 'name' => 'Hualpén'],
            ['ad_id' => 8, 'name' => 'Hualqui'],
            ['ad_id' => 1, 'name' => 'Huara'],
            ['ad_id' => 3, 'name' => 'Huasco'],
            ['ad_id' => 13, 'name' => 'Huechuraba'],
            ['ad_id' => 4, 'name' => 'Río Hurtado'],
            ['ad_id' => 4, 'name' => 'Illapel'],
            ['ad_id' => 13, 'name' => 'Independencia'],
            ['ad_id' => 1, 'name' => 'Iquique'],
            ['ad_id' => 13, 'name' => 'Isla de Maipo'],
            ['ad_id' => 5, 'name' => 'Isla de Pascua'],
            ['ad_id' => 5, 'name' => 'Juan Fernandez'],
            ['ad_id' => 5, 'name' => 'La Calera'],
            ['ad_id' => 13, 'name' => 'La Cisterna'],
            ['ad_id' => 5, 'name' => 'La Cruz'],
            ['ad_id' => 6, 'name' => 'La Estrella'],
            ['ad_id' => 13, 'name' => 'La Florida'],
            ['ad_id' => 13, 'name' => 'La Granja'],
            ['ad_id' => 4, 'name' => 'La Higuera'],
            ['ad_id' => 8, 'name' => 'La Laja'],
            ['ad_id' => 5, 'name' => 'La Ligua'],
            ['ad_id' => 13, 'name' => 'La Pintana'],
            ['ad_id' => 13, 'name' => 'La Reina'],
            ['ad_id' => 4, 'name' => 'La Serena'],
            ['ad_id' => 11, 'name' => 'Lago Verde'],
            ['ad_id' => 12, 'name' => 'Laguna Blanca'],
            ['ad_id' => 13, 'name' => 'Lampa'],
            ['ad_id' => 6, 'name' => 'Las Cabras'],
            ['ad_id' => 13, 'name' => 'Las Condes'],
            ['ad_id' => 11, 'name' => 'Puerto Aysen'],
            ['ad_id' => 9, 'name' => 'Lautaro'],
            ['ad_id' => 8, 'name' => 'Lebu'],
            ['ad_id' => 7, 'name' => 'Licanten'],
            ['ad_id' => 5, 'name' => 'Limache'],
            ['ad_id' => 7, 'name' => 'Linares'],
            ['ad_id' => 6, 'name' => 'Litueche'],
            ['ad_id' => 10, 'name' => 'Llanquihue'],
            ['ad_id' => 13, 'name' => 'Lo Barnechea'],
            ['ad_id' => 13, 'name' => 'Lo Espejo'],
            ['ad_id' => 13, 'name' => 'Lo Prado'],
            ['ad_id' => 6, 'name' => 'Lolol'],
            ['ad_id' => 9, 'name' => 'Loncoche'],
            ['ad_id' => 7, 'name' => 'Longavi'],
            ['ad_id' => 9, 'name' => 'Lonquimay'],
            ['ad_id' => 8, 'name' => 'Los Alamos'],
            ['ad_id' => 5, 'name' => 'Los Andes'],
            ['ad_id' => 8, 'name' => 'Los Angeles'],
            ['ad_id' => 10, 'name' => 'Los Muermos'],
            ['ad_id' => 9, 'name' => 'Los Sauces'],
            ['ad_id' => 4, 'name' => 'Los Vilos'],
            ['ad_id' => 8, 'name' => 'Lota'],
            ['ad_id' => 9, 'name' => 'Lumaco'],
            ['ad_id' => 6, 'name' => 'Machalí'],
            ['ad_id' => 13, 'name' => 'Macul'],
            ['ad_id' => 13, 'name' => 'Maipu'],
            ['ad_id' => 6, 'name' => 'Malloa'],
            ['ad_id' => 6, 'name' => 'Marchihue'],
            ['ad_id' => 2, 'name' => 'Maria Elena'],
            ['ad_id' => 13, 'name' => 'Maria Pinto'],
            ['ad_id' => 7, 'name' => 'Maule'],
            ['ad_id' => 10, 'name' => 'Maullin'],
            ['ad_id' => 2, 'name' => 'Mejillones'],
            ['ad_id' => 9, 'name' => 'Melipeuco'],
            ['ad_id' => 13, 'name' => 'Melipilla'],
            ['ad_id' => 7, 'name' => 'Molina'],
            ['ad_id' => 4, 'name' => 'Monte Patria'],
            ['ad_id' => 8, 'name' => 'Mulchen'],
            ['ad_id' => 8, 'name' => 'Nacimiento'],
            ['ad_id' => 6, 'name' => 'Nancahua'],
            ['ad_id' => 6, 'name' => 'Navidad'],
            ['ad_id' => 8, 'name' => 'Negrete'],
            ['ad_id' => 16, 'name' => 'Ninhue'],
            ['ad_id' => 16, 'name' => 'Ñiquén'],
            ['ad_id' => 5, 'name' => 'Nogales'],
            ['ad_id' => 9, 'name' => 'Nueva Imperial'],
            ['ad_id' => 13, 'name' => 'Ñuñoa'],
            ['ad_id' => 11, 'name' => "O'Higgins"],
            ['ad_id' => 6, 'name' => 'Olivar'],
            ['ad_id' => 2, 'name' => 'Ollagüe'],
            ['ad_id' => 5, 'name' => 'Olmue'],
            ['ad_id' => 10, 'name' => 'Osorno'],
            ['ad_id' => 4, 'name' => 'Ovalle'],
            ['ad_id' => 13, 'name' => 'Padre Hurtado'],
            ['ad_id' => 9, 'name' => 'Padre Las Casas'],
            ['ad_id' => 4, 'name' => 'Paiguano'],
            ['ad_id' => 13, 'name' => 'Paine'],
            ['ad_id' => 10, 'name' => 'Palena'],
            ['ad_id' => 6, 'name' => 'Palmilla'],
            ['ad_id' => 5, 'name' => 'Panquehue'],
            ['ad_id' => 5, 'name' => 'Papudo'],
            ['ad_id' => 6, 'name' => 'Paredones'],
            ['ad_id' => 7, 'name' => 'Parral'],
            ['ad_id' => 13, 'name' => 'Pedro Aguirre Cerda'],
            ['ad_id' => 7, 'name' => 'Pelarco'],
            ['ad_id' => 7, 'name' => 'Pelluhue'],
            ['ad_id' => 16, 'name' => 'Pemuco'],
            ['ad_id' => 13, 'name' => 'Peñaflor'],
            ['ad_id' => 13, 'name' => 'Peñalolen'],
            ['ad_id' => 7, 'name' => 'Pencahue'],
            ['ad_id' => 8, 'name' => 'Penco'],
            ['ad_id' => 6, 'name' => 'Peralillo'],
            ['ad_id' => 9, 'name' => 'Perquenco'],
            ['ad_id' => 5, 'name' => 'Petorca'],
            ['ad_id' => 6, 'name' => 'Peumo'],
            ['ad_id' => 1, 'name' => 'Pica'],
            ['ad_id' => 6, 'name' => 'Pichidegua'],
            ['ad_id' => 6, 'name' => 'Pichilemu'],
            ['ad_id' => 16, 'name' => 'Pinto'],
            ['ad_id' => 13, 'name' => 'Pirque'],
            ['ad_id' => 9, 'name' => 'Pitrufquen'],
            ['ad_id' => 6, 'name' => 'Placilla'],
            ['ad_id' => 16, 'name' => 'Portezuelo'],
            ['ad_id' => 12, 'name' => 'Porvenir'],
            ['ad_id' => 1, 'name' => 'Pozo Almonte'],
            ['ad_id' => 12, 'name' => 'Primavera'],
            ['ad_id' => 13, 'name' => 'Providencia'],
            ['ad_id' => 5, 'name' => 'Puchuncaví'],
            ['ad_id' => 9, 'name' => 'Pucon'],
            ['ad_id' => 9, 'name' => 'Puerto Saavedra'],
            ['ad_id' => 13, 'name' => 'Pudahuel'],
            ['ad_id' => 13, 'name' => 'Puente Alto'],
            ['ad_id' => 10, 'name' => 'Puerto Montt'],
            ['ad_id' => 12, 'name' => 'Natales'],
            ['ad_id' => 10, 'name' => 'Puerto Octay'],
            ['ad_id' => 10, 'name' => 'Puerto Varas'],
            ['ad_id' => 6, 'name' => 'Pumanque'],
            ['ad_id' => 4, 'name' => 'Punitaqui'],
            ['ad_id' => 12, 'name' => 'Punta Arenas'],
            ['ad_id' => 10, 'name' => 'Puqueldon'],
            ['ad_id' => 9, 'name' => 'Puren'],
            ['ad_id' => 10, 'name' => 'Purranque'],
            ['ad_id' => 5, 'name' => 'Putaendo'],
            ['ad_id' => 15, 'name' => 'Putre'],
            ['ad_id' => 10, 'name' => 'Puyehue'],
            ['ad_id' => 10, 'name' => 'Queilen'],
            ['ad_id' => 10, 'name' => 'Quellon (Puerto Quellon)'],
            ['ad_id' => 10, 'name' => 'Quemchi'],
            ['ad_id' => 8, 'name' => 'Quilaco'],
            ['ad_id' => 13, 'name' => 'Quilicura'],
            ['ad_id' => 8, 'name' => 'Quilleco'],
            ['ad_id' => 16, 'name' => 'Quillon'],
            ['ad_id' => 5, 'name' => 'Quillota'],
            ['ad_id' => 5, 'name' => 'Quilpué'],
            ['ad_id' => 8, 'name' => 'Tucapel'],
            ['ad_id' => 10, 'name' => 'Quinchao'],
            ['ad_id' => 6, 'name' => 'Quinta de Tilcoco'],
            ['ad_id' => 13, 'name' => 'Quinta Normal'],
            ['ad_id' => 5, 'name' => 'Quintero'],
            ['ad_id' => 16, 'name' => 'Quirihue'],
            ['ad_id' => 6, 'name' => 'Rancagua'],
            ['ad_id' => 16, 'name' => 'Ranquil'],
            ['ad_id' => 6, 'name' => 'Rapel'],
            ['ad_id' => 7, 'name' => 'Rauco'],
            ['ad_id' => 13, 'name' => 'Recoleta'],
            ['ad_id' => 9, 'name' => 'Renaico'],
            ['ad_id' => 13, 'name' => 'Renca'],
            ['ad_id' => 6, 'name' => 'Rengo'],
            ['ad_id' => 6, 'name' => 'Requinoa'],
            ['ad_id' => 7, 'name' => 'Retiro'],
            ['ad_id' => 5, 'name' => 'Rinconada de Los Andes'],
            ['ad_id' => 7, 'name' => 'Rio Claro'],
            ['ad_id' => 11, 'name' => 'Rio Ibanez'],
            ['ad_id' => 10, 'name' => 'Rio Negro'],
            ['ad_id' => 12, 'name' => 'Rio Verde'],
            ['ad_id' => 7, 'name' => 'Romeral'],
            ['ad_id' => 7, 'name' => 'Sagrada Familia'],
            ['ad_id' => 4, 'name' => 'Salamanca'],
            ['ad_id' => 5, 'name' => 'San Antonio'],
            ['ad_id' => 13, 'name' => 'San Bernardo'],
            ['ad_id' => 16, 'name' => 'San Carlos'],
            ['ad_id' => 7, 'name' => 'San Clemente'],
            ['ad_id' => 5, 'name' => 'San Esteban'],
            ['ad_id' => 16, 'name' => 'San Fabian'],
            ['ad_id' => 5, 'name' => 'San Felipe'],
            ['ad_id' => 6, 'name' => 'San Fernando'],
            ['ad_id' => 12, 'name' => 'San Gregorio'],
            ['ad_id' => 16, 'name' => 'San Ignacio'],
            ['ad_id' => 7, 'name' => 'San Javier'],
            ['ad_id' => 13, 'name' => 'San Joaquin'],
            ['ad_id' => 13, 'name' => 'San Jose de Maipo'],
            ['ad_id' => 10, 'name' => 'San Juan de la Costa'],
            ['ad_id' => 13, 'name' => 'San Miguel'],
            ['ad_id' => 16, 'name' => 'San Nicolas'],
            ['ad_id' => 10, 'name' => 'San Pablo'],
            ['ad_id' => 13, 'name' => 'San Pedro'],
            ['ad_id' => 2, 'name' => 'San Pedro de Atacama'],
            ['ad_id' => 8, 'name' => 'San Pedro de la Paz'],
            ['ad_id' => 7, 'name' => 'San Rafael'],
            ['ad_id' => 13, 'name' => 'San Ramon'],
            ['ad_id' => 8, 'name' => 'San Rosendo'],
            ['ad_id' => 6, 'name' => 'San Vicente de Tagua Tagua'],
            ['ad_id' => 8, 'name' => 'Santa Barbara'],
            ['ad_id' => 6, 'name' => 'Santa Cruz'],
            ['ad_id' => 8, 'name' => 'Santa Juana'],
            ['ad_id' => 5, 'name' => 'Santa Maria'],
            ['ad_id' => 13, 'name' => 'Santiago'],
            ['ad_id' => 5, 'name' => 'Santo Domingo'],
            ['ad_id' => 2, 'name' => 'Sierra Gorda'],
            ['ad_id' => 13, 'name' => 'Talagante'],
            ['ad_id' => 7, 'name' => 'Talca'],
            ['ad_id' => 8, 'name' => 'Talcahuano'],
            ['ad_id' => 2, 'name' => 'Taltal'],
            ['ad_id' => 9, 'name' => 'Temuco'],
            ['ad_id' => 7, 'name' => 'Teno'],
            ['ad_id' => 9, 'name' => 'Teodoro Schmidt'],
            ['ad_id' => 3, 'name' => 'Tierra Amarilla'],
            ['ad_id' => 13, 'name' => 'Til til'],
            ['ad_id' => 12, 'name' => 'Timaukel'],
            ['ad_id' => 8, 'name' => 'Tirúa'],
            ['ad_id' => 2, 'name' => 'Tocopilla'],
            ['ad_id' => 9, 'name' => 'Tolten'],
            ['ad_id' => 8, 'name' => 'Tome'],
            ['ad_id' => 12, 'name' => 'Torres del Paine'],
            ['ad_id' => 11, 'name' => 'Tortel'],
            ['ad_id' => 9, 'name' => 'Traiguen'],
            ['ad_id' => 16, 'name' => 'Treguaco'],
            ['ad_id' => 3, 'name' => 'Vallenar'],
            ['ad_id' => 5, 'name' => 'Valparaiso'],
            ['ad_id' => 7, 'name' => 'Vichuquen'],
            ['ad_id' => 9, 'name' => 'Victoria'],
            ['ad_id' => 4, 'name' => 'Vicuña'],
            ['ad_id' => 9, 'name' => 'Vilcun'],
            ['ad_id' => 7, 'name' => 'Villa Alegre'],
            ['ad_id' => 5, 'name' => 'Villa Alemana'],
            ['ad_id' => 9, 'name' => 'Villarrica'],
            ['ad_id' => 5, 'name' => 'Vina del Mar'],
            ['ad_id' => 13, 'name' => 'Vitacura'],
            ['ad_id' => 7, 'name' => 'Yerbas Buenas'],
            ['ad_id' => 8, 'name' => 'Yumbel'],
            ['ad_id' => 16, 'name' => 'Yungay'],
            ['ad_id' => 5, 'name' => 'Zapallar'],
            ['ad_id' => 14, 'name' => 'Corral'],
            ['ad_id' => 14, 'name' => 'Lanco'],
            ['ad_id' => 14, 'name' => 'Los Lagos'],
            ['ad_id' => 14, 'name' => 'Mafil'],
            ['ad_id' => 14, 'name' => 'Mariquina'],
            ['ad_id' => 14, 'name' => 'Paillaco'],
            ['ad_id' => 14, 'name' => 'Panguipulli'],
            ['ad_id' => 14, 'name' => 'Valdivia'],
            ['ad_id' => 14, 'name' => 'Futrono'],
            ['ad_id' => 14, 'name' => 'La Unión'],
            ['ad_id' => 14, 'name' => 'Lago Ranco'],
            ['ad_id' => 14, 'name' => 'Rio Bueno']
        ];

        foreach ($data as $city) {
            DB::table('cities')->insert([
                'administrative_division_id' => $city['ad_id'],
                'name' => $city['name'],
                'created_at' => $today,
                'updated_at' => $today
            ]);
        }
    }
}
