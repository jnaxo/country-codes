<?php

use Illuminate\Database\Seeder;

class ChileanCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ctrystore_cities')->delete();

        $today = date('Y-m-d H:i:s');
        $data = [
            ['aa_id' => 5, 'name' => 'Algarrobo'],
            ['aa_id' => 13, 'name' => 'Alhue'],
            ['aa_id' => 8, 'name' => 'Alto BioBío'],
            ['aa_id' => 3, 'name' => 'Alto del Carmen'],
            ['aa_id' => 1, 'name' => 'Alto Hospicio'],
            ['aa_id' => 10, 'name' => 'Ancud'],
            ['aa_id' => 4, 'name' => 'Andacollo'],
            ['aa_id' => 9, 'name' => 'Angol'],
            ['aa_id' => 2, 'name' => 'Antofagasta'],
            ['aa_id' => 8, 'name' => 'Antuco'],
            ['aa_id' => 8, 'name' => 'Arauco'],
            ['aa_id' => 15, 'name' => 'Arica'],
            ['aa_id' => 13, 'name' => 'Buin'],
            ['aa_id' => 16, 'name' => 'Bulnes'],
            ['aa_id' => 5, 'name' => 'Cabildo'],
            ['aa_id' => 12, 'name' => 'Cabo de Hornos'],
            ['aa_id' => 8, 'name' => 'Cabrero'],
            ['aa_id' => 2, 'name' => 'Calama'],
            ['aa_id' => 10, 'name' => 'Antártica'],
            ['aa_id' => 10, 'name' => 'Calbuco'],
            ['aa_id' => 3, 'name' => 'Caldera'],
            ['aa_id' => 13, 'name' => 'Calera de Tango'],
            ['aa_id' => 5, 'name' => 'Calle Larga'],
            ['aa_id' => 15, 'name' => 'Camarones'],
            ['aa_id' => 1, 'name' => 'Camiña'],
            ['aa_id' => 4, 'name' => 'Canela'],
            ['aa_id' => 8, 'name' => 'Cañete'],
            ['aa_id' => 9, 'name' => 'Carahue'],
            ['aa_id' => 5, 'name' => 'Carnameena'],
            ['aa_id' => 5, 'name' => 'Casablanca'],
            ['aa_id' => 10, 'name' => 'Castro'],
            ['aa_id' => 5, 'name' => 'Catemu'],
            ['aa_id' => 7, 'name' => 'Cauquenes'],
            ['aa_id' => 13, 'name' => 'Cerrillos'],
            ['aa_id' => 13, 'name' => 'Cerro Navia'],
            ['aa_id' => 10, 'name' => 'Chaiten'],
            ['aa_id' => 3, 'name' => 'Chañaral'],
            ['aa_id' => 7, 'name' => 'Chanco'],
            ['aa_id' => 6, 'name' => 'Chépica'],
            ['aa_id' => 8, 'name' => 'Chiguayante'],
            ['aa_id' => 11, 'name' => 'Chile Chico'],
            ['aa_id' => 16, 'name' => 'Chillan'],
            ['aa_id' => 16, 'name' => 'Chillan Viejo'],
            ['aa_id' => 6, 'name' => 'Chimbarongo'],
            ['aa_id' => 9, 'name' => 'Cholchol'],
            ['aa_id' => 10, 'name' => 'Chonchi'],
            ['aa_id' => 16, 'name' => 'Cobquecura'],
            ['aa_id' => 10, 'name' => 'Cochamó'],
            ['aa_id' => 11, 'name' => 'Cochrane'],
            ['aa_id' => 6, 'name' => 'Codegua'],
            ['aa_id' => 16, 'name' => 'Coelemu'],
            ['aa_id' => 16, 'name' => 'Coihueco'],
            ['aa_id' => 6, 'name' => 'Coinco'],
            ['aa_id' => 7, 'name' => 'Colbun'],
            ['aa_id' => 1, 'name' => 'Colchane'],
            ['aa_id' => 13, 'name' => 'Colina'],
            ['aa_id' => 9, 'name' => 'Collipulli'],
            ['aa_id' => 6, 'name' => 'Coltauco'],
            ['aa_id' => 4, 'name' => 'Combarbalá'],
            ['aa_id' => 8, 'name' => 'Concepcion'],
            ['aa_id' => 13, 'name' => 'Conchali'],
            ['aa_id' => 5, 'name' => 'Concón'],
            ['aa_id' => 7, 'name' => 'Constitucion'],
            ['aa_id' => 8, 'name' => 'Contulmo'],
            ['aa_id' => 3, 'name' => 'Copiapó'],
            ['aa_id' => 4, 'name' => 'Coquimbo'],
            ['aa_id' => 8, 'name' => 'Coronel'],
            ['aa_id' => 11, 'name' => 'Coyhaique'],
            ['aa_id' => 9, 'name' => 'Cunco'],
            ['aa_id' => 9, 'name' => 'Curacautin'],
            ['aa_id' => 13, 'name' => 'Curacavi'],
            ['aa_id' => 10, 'name' => 'Curaco de Velez'],
            ['aa_id' => 8, 'name' => 'Curanilahue'],
            ['aa_id' => 9, 'name' => 'Curarrehue'],
            ['aa_id' => 7, 'name' => 'Curepto'],
            ['aa_id' => 7, 'name' => 'Curico'],
            ['aa_id' => 10, 'name' => 'Dalcahue'],
            ['aa_id' => 3, 'name' => 'Diego de Almagro'],
            ['aa_id' => 6, 'name' => 'Doñihue'],
            ['aa_id' => 13, 'name' => 'El Bosque'],
            ['aa_id' => 16, 'name' => 'El Carmen'],
            ['aa_id' => 13, 'name' => 'El Monte'],
            ['aa_id' => 5, 'name' => 'El Quisco'],
            ['aa_id' => 5, 'name' => 'El Tabo'],
            ['aa_id' => 7, 'name' => 'Empedrado'],
            ['aa_id' => 9, 'name' => 'Ercilla'],
            ['aa_id' => 13, 'name' => 'Estacion Central'],
            ['aa_id' => 8, 'name' => 'Florida'],
            ['aa_id' => 9, 'name' => 'Freire'],
            ['aa_id' => 3, 'name' => 'Freirina'],
            ['aa_id' => 10, 'name' => 'Fresia'],
            ['aa_id' => 10, 'name' => 'Frutillar'],
            ['aa_id' => 10, 'name' => 'Futaleufu'],
            ['aa_id' => 9, 'name' => 'Galvarino'],
            ['aa_id' => 15, 'name' => 'General Lagos'],
            ['aa_id' => 9, 'name' => 'Gorbea'],
            ['aa_id' => 6, 'name' => 'Graneros'],
            ['aa_id' => 11, 'name' => 'Guaitecas'],
            ['aa_id' => 5, 'name' => 'Hijuelas'],
            ['aa_id' => 10, 'name' => 'Hualaihue'],
            ['aa_id' => 11, 'name' => 'Puerto Cisnes'],
            ['aa_id' => 7, 'name' => 'Hualañé'],
            ['aa_id' => 8, 'name' => 'Hualpén'],
            ['aa_id' => 8, 'name' => 'Hualqui'],
            ['aa_id' => 1, 'name' => 'Huara'],
            ['aa_id' => 3, 'name' => 'Huasco'],
            ['aa_id' => 13, 'name' => 'Huechuraba'],
            ['aa_id' => 4, 'name' => 'Río Hurtado'],
            ['aa_id' => 4, 'name' => 'Illapel'],
            ['aa_id' => 13, 'name' => 'Independencia'],
            ['aa_id' => 1, 'name' => 'Iquique'],
            ['aa_id' => 13, 'name' => 'Isla de Maipo'],
            ['aa_id' => 5, 'name' => 'Isla de Pascua'],
            ['aa_id' => 5, 'name' => 'Juan Fernandez'],
            ['aa_id' => 5, 'name' => 'La Calera'],
            ['aa_id' => 13, 'name' => 'La Cisterna'],
            ['aa_id' => 5, 'name' => 'La Cruz'],
            ['aa_id' => 6, 'name' => 'La Estrella'],
            ['aa_id' => 13, 'name' => 'La Florida'],
            ['aa_id' => 13, 'name' => 'La Granja'],
            ['aa_id' => 4, 'name' => 'La Higuera'],
            ['aa_id' => 8, 'name' => 'La Laja'],
            ['aa_id' => 5, 'name' => 'La Ligua'],
            ['aa_id' => 13, 'name' => 'La Pintana'],
            ['aa_id' => 13, 'name' => 'La Reina'],
            ['aa_id' => 4, 'name' => 'La Serena'],
            ['aa_id' => 11, 'name' => 'Lago Verde'],
            ['aa_id' => 12, 'name' => 'Laguna Blanca'],
            ['aa_id' => 13, 'name' => 'Lampa'],
            ['aa_id' => 6, 'name' => 'Las Cabras'],
            ['aa_id' => 13, 'name' => 'Las Condes'],
            ['aa_id' => 11, 'name' => 'Puerto Aysen'],
            ['aa_id' => 9, 'name' => 'Lautaro'],
            ['aa_id' => 8, 'name' => 'Lebu'],
            ['aa_id' => 7, 'name' => 'Licanten'],
            ['aa_id' => 5, 'name' => 'Limache'],
            ['aa_id' => 7, 'name' => 'Linares'],
            ['aa_id' => 6, 'name' => 'Litueche'],
            ['aa_id' => 10, 'name' => 'Llanquihue'],
            ['aa_id' => 13, 'name' => 'Lo Barnechea'],
            ['aa_id' => 13, 'name' => 'Lo Espejo'],
            ['aa_id' => 13, 'name' => 'Lo Prado'],
            ['aa_id' => 6, 'name' => 'Lolol'],
            ['aa_id' => 9, 'name' => 'Loncoche'],
            ['aa_id' => 7, 'name' => 'Longavi'],
            ['aa_id' => 9, 'name' => 'Lonquimay'],
            ['aa_id' => 8, 'name' => 'Los Alamos'],
            ['aa_id' => 5, 'name' => 'Los Andes'],
            ['aa_id' => 8, 'name' => 'Los Angeles'],
            ['aa_id' => 10, 'name' => 'Los Muermos'],
            ['aa_id' => 9, 'name' => 'Los Sauces'],
            ['aa_id' => 4, 'name' => 'Los Vilos'],
            ['aa_id' => 8, 'name' => 'Lota'],
            ['aa_id' => 9, 'name' => 'Lumaco'],
            ['aa_id' => 6, 'name' => 'Machalí'],
            ['aa_id' => 13, 'name' => 'Macul'],
            ['aa_id' => 13, 'name' => 'Maipu'],
            ['aa_id' => 6, 'name' => 'Malloa'],
            ['aa_id' => 6, 'name' => 'Marchihue'],
            ['aa_id' => 2, 'name' => 'Maria Elena'],
            ['aa_id' => 13, 'name' => 'Maria Pinto'],
            ['aa_id' => 7, 'name' => 'Maule'],
            ['aa_id' => 10, 'name' => 'Maullin'],
            ['aa_id' => 2, 'name' => 'Mejillones'],
            ['aa_id' => 9, 'name' => 'Melipeuco'],
            ['aa_id' => 13, 'name' => 'Melipilla'],
            ['aa_id' => 7, 'name' => 'Molina'],
            ['aa_id' => 4, 'name' => 'Monte Patria'],
            ['aa_id' => 8, 'name' => 'Mulchen'],
            ['aa_id' => 8, 'name' => 'Nacimiento'],
            ['aa_id' => 6, 'name' => 'Nancahua'],
            ['aa_id' => 6, 'name' => 'Navidad'],
            ['aa_id' => 8, 'name' => 'Negrete'],
            ['aa_id' => 16, 'name' => 'Ninhue'],
            ['aa_id' => 16, 'name' => 'Ñiquén'],
            ['aa_id' => 5, 'name' => 'Nogales'],
            ['aa_id' => 9, 'name' => 'Nueva Imperial'],
            ['aa_id' => 13, 'name' => 'Ñuñoa'],
            ['aa_id' => 11, 'name' => "O'Higgins"],
            ['aa_id' => 6, 'name' => 'Olivar'],
            ['aa_id' => 2, 'name' => 'Ollagüe'],
            ['aa_id' => 5, 'name' => 'Olmue'],
            ['aa_id' => 10, 'name' => 'Osorno'],
            ['aa_id' => 4, 'name' => 'Ovalle'],
            ['aa_id' => 13, 'name' => 'Padre Hurtado'],
            ['aa_id' => 9, 'name' => 'Padre Las Casas'],
            ['aa_id' => 4, 'name' => 'Paiguano'],
            ['aa_id' => 13, 'name' => 'Paine'],
            ['aa_id' => 10, 'name' => 'Palena'],
            ['aa_id' => 6, 'name' => 'Palmilla'],
            ['aa_id' => 5, 'name' => 'Panquehue'],
            ['aa_id' => 5, 'name' => 'Papudo'],
            ['aa_id' => 6, 'name' => 'Paredones'],
            ['aa_id' => 7, 'name' => 'Parral'],
            ['aa_id' => 13, 'name' => 'Pedro Aguirre Cerda'],
            ['aa_id' => 7, 'name' => 'Pelarco'],
            ['aa_id' => 7, 'name' => 'Pelluhue'],
            ['aa_id' => 16, 'name' => 'Pemuco'],
            ['aa_id' => 13, 'name' => 'Peñaflor'],
            ['aa_id' => 13, 'name' => 'Peñalolen'],
            ['aa_id' => 7, 'name' => 'Pencahue'],
            ['aa_id' => 8, 'name' => 'Penco'],
            ['aa_id' => 6, 'name' => 'Peralillo'],
            ['aa_id' => 9, 'name' => 'Perquenco'],
            ['aa_id' => 5, 'name' => 'Petorca'],
            ['aa_id' => 6, 'name' => 'Peumo'],
            ['aa_id' => 1, 'name' => 'Pica'],
            ['aa_id' => 6, 'name' => 'Pichidegua'],
            ['aa_id' => 6, 'name' => 'Pichilemu'],
            ['aa_id' => 16, 'name' => 'Pinto'],
            ['aa_id' => 13, 'name' => 'Pirque'],
            ['aa_id' => 9, 'name' => 'Pitrufquen'],
            ['aa_id' => 6, 'name' => 'Placilla'],
            ['aa_id' => 16, 'name' => 'Portezuelo'],
            ['aa_id' => 12, 'name' => 'Porvenir'],
            ['aa_id' => 1, 'name' => 'Pozo Almonte'],
            ['aa_id' => 12, 'name' => 'Primavera'],
            ['aa_id' => 13, 'name' => 'Providencia'],
            ['aa_id' => 5, 'name' => 'Puchuncaví'],
            ['aa_id' => 9, 'name' => 'Pucon'],
            ['aa_id' => 9, 'name' => 'Puerto Saavedra'],
            ['aa_id' => 13, 'name' => 'Pudahuel'],
            ['aa_id' => 13, 'name' => 'Puente Alto'],
            ['aa_id' => 10, 'name' => 'Puerto Montt'],
            ['aa_id' => 12, 'name' => 'Natales'],
            ['aa_id' => 10, 'name' => 'Puerto Octay'],
            ['aa_id' => 10, 'name' => 'Puerto Varas'],
            ['aa_id' => 6, 'name' => 'Pumanque'],
            ['aa_id' => 4, 'name' => 'Punitaqui'],
            ['aa_id' => 12, 'name' => 'Punta Arenas'],
            ['aa_id' => 10, 'name' => 'Puqueldon'],
            ['aa_id' => 9, 'name' => 'Puren'],
            ['aa_id' => 10, 'name' => 'Purranque'],
            ['aa_id' => 5, 'name' => 'Putaendo'],
            ['aa_id' => 15, 'name' => 'Putre'],
            ['aa_id' => 10, 'name' => 'Puyehue'],
            ['aa_id' => 10, 'name' => 'Queilen'],
            ['aa_id' => 10, 'name' => 'Quellon (Puerto Quellon)'],
            ['aa_id' => 10, 'name' => 'Quemchi'],
            ['aa_id' => 8, 'name' => 'Quilaco'],
            ['aa_id' => 13, 'name' => 'Quilicura'],
            ['aa_id' => 8, 'name' => 'Quilleco'],
            ['aa_id' => 16, 'name' => 'Quillon'],
            ['aa_id' => 5, 'name' => 'Quillota'],
            ['aa_id' => 5, 'name' => 'Quilpué'],
            ['aa_id' => 8, 'name' => 'Tucapel'],
            ['aa_id' => 10, 'name' => 'Quinchao'],
            ['aa_id' => 6, 'name' => 'Quinta de Tilcoco'],
            ['aa_id' => 13, 'name' => 'Quinta Normal'],
            ['aa_id' => 5, 'name' => 'Quintero'],
            ['aa_id' => 16, 'name' => 'Quirihue'],
            ['aa_id' => 6, 'name' => 'Rancagua'],
            ['aa_id' => 16, 'name' => 'Ranquil'],
            ['aa_id' => 6, 'name' => 'Rapel'],
            ['aa_id' => 7, 'name' => 'Rauco'],
            ['aa_id' => 13, 'name' => 'Recoleta'],
            ['aa_id' => 9, 'name' => 'Renaico'],
            ['aa_id' => 13, 'name' => 'Renca'],
            ['aa_id' => 6, 'name' => 'Rengo'],
            ['aa_id' => 6, 'name' => 'Requinoa'],
            ['aa_id' => 7, 'name' => 'Retiro'],
            ['aa_id' => 5, 'name' => 'Rinconada de Los Andes'],
            ['aa_id' => 7, 'name' => 'Rio Claro'],
            ['aa_id' => 11, 'name' => 'Rio Ibanez'],
            ['aa_id' => 10, 'name' => 'Rio Negro'],
            ['aa_id' => 12, 'name' => 'Rio Verde'],
            ['aa_id' => 7, 'name' => 'Romeral'],
            ['aa_id' => 7, 'name' => 'Sagrada Familia'],
            ['aa_id' => 4, 'name' => 'Salamanca'],
            ['aa_id' => 5, 'name' => 'San Antonio'],
            ['aa_id' => 13, 'name' => 'San Bernardo'],
            ['aa_id' => 16, 'name' => 'San Carlos'],
            ['aa_id' => 7, 'name' => 'San Clemente'],
            ['aa_id' => 5, 'name' => 'San Esteban'],
            ['aa_id' => 16, 'name' => 'San Fabian'],
            ['aa_id' => 5, 'name' => 'San Felipe'],
            ['aa_id' => 6, 'name' => 'San Fernando'],
            ['aa_id' => 12, 'name' => 'San Gregorio'],
            ['aa_id' => 16, 'name' => 'San Ignacio'],
            ['aa_id' => 7, 'name' => 'San Javier'],
            ['aa_id' => 13, 'name' => 'San Joaquin'],
            ['aa_id' => 13, 'name' => 'San Jose de Maipo'],
            ['aa_id' => 10, 'name' => 'San Juan de la Costa'],
            ['aa_id' => 13, 'name' => 'San Miguel'],
            ['aa_id' => 16, 'name' => 'San Nicolas'],
            ['aa_id' => 10, 'name' => 'San Pablo'],
            ['aa_id' => 13, 'name' => 'San Pedro'],
            ['aa_id' => 2, 'name' => 'San Pedro de Atacama'],
            ['aa_id' => 8, 'name' => 'San Pedro de la Paz'],
            ['aa_id' => 7, 'name' => 'San Rafael'],
            ['aa_id' => 13, 'name' => 'San Ramon'],
            ['aa_id' => 8, 'name' => 'San Rosendo'],
            ['aa_id' => 6, 'name' => 'San Vicente de Tagua Tagua'],
            ['aa_id' => 8, 'name' => 'Santa Barbara'],
            ['aa_id' => 6, 'name' => 'Santa Cruz'],
            ['aa_id' => 8, 'name' => 'Santa Juana'],
            ['aa_id' => 5, 'name' => 'Santa Maria'],
            ['aa_id' => 13, 'name' => 'Santiago'],
            ['aa_id' => 5, 'name' => 'Santo Domingo'],
            ['aa_id' => 2, 'name' => 'Sierra Gorda'],
            ['aa_id' => 13, 'name' => 'Talagante'],
            ['aa_id' => 7, 'name' => 'Talca'],
            ['aa_id' => 8, 'name' => 'Talcahuano'],
            ['aa_id' => 2, 'name' => 'Taltal'],
            ['aa_id' => 9, 'name' => 'Temuco'],
            ['aa_id' => 7, 'name' => 'Teno'],
            ['aa_id' => 9, 'name' => 'Teodoro Schmidt'],
            ['aa_id' => 3, 'name' => 'Tierra Amarilla'],
            ['aa_id' => 13, 'name' => 'Til til'],
            ['aa_id' => 12, 'name' => 'Timaukel'],
            ['aa_id' => 8, 'name' => 'Tirúa'],
            ['aa_id' => 2, 'name' => 'Tocopilla'],
            ['aa_id' => 9, 'name' => 'Tolten'],
            ['aa_id' => 8, 'name' => 'Tome'],
            ['aa_id' => 12, 'name' => 'Torres del Paine'],
            ['aa_id' => 11, 'name' => 'Tortel'],
            ['aa_id' => 9, 'name' => 'Traiguen'],
            ['aa_id' => 16, 'name' => 'Treguaco'],
            ['aa_id' => 3, 'name' => 'Vallenar'],
            ['aa_id' => 5, 'name' => 'Valparaiso'],
            ['aa_id' => 7, 'name' => 'Vichuquen'],
            ['aa_id' => 9, 'name' => 'Victoria'],
            ['aa_id' => 4, 'name' => 'Vicuña'],
            ['aa_id' => 9, 'name' => 'Vilcun'],
            ['aa_id' => 7, 'name' => 'Villa Alegre'],
            ['aa_id' => 5, 'name' => 'Villa Alemana'],
            ['aa_id' => 9, 'name' => 'Villarrica'],
            ['aa_id' => 5, 'name' => 'Vina del Mar'],
            ['aa_id' => 13, 'name' => 'Vitacura'],
            ['aa_id' => 7, 'name' => 'Yerbas Buenas'],
            ['aa_id' => 8, 'name' => 'Yumbel'],
            ['aa_id' => 16, 'name' => 'Yungay'],
            ['aa_id' => 5, 'name' => 'Zapallar'],
            ['aa_id' => 14, 'name' => 'Corral'],
            ['aa_id' => 14, 'name' => 'Lanco'],
            ['aa_id' => 14, 'name' => 'Los Lagos'],
            ['aa_id' => 14, 'name' => 'Mafil'],
            ['aa_id' => 14, 'name' => 'Mariquina'],
            ['aa_id' => 14, 'name' => 'Paillaco'],
            ['aa_id' => 14, 'name' => 'Panguipulli'],
            ['aa_id' => 14, 'name' => 'Valdivia'],
            ['aa_id' => 14, 'name' => 'Futrono'],
            ['aa_id' => 14, 'name' => 'La Unión'],
            ['aa_id' => 14, 'name' => 'Lago Ranco'],
            ['aa_id' => 14, 'name' => 'Rio Bueno']
        ];

        foreach ($data as $city) {
            DB::table('ctrystore_cities')->insert([
                'admin_area_id' => $city['aa_id'],
                'name' => $city['name'],
                'created_at' => $today,
                'updated_at' => $today
            ]);
        }
    }
}
