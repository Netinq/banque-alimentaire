<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::firstOrCreate(['name' => 'Corse-du-Sud','identifier' => '2A']);
        State::firstOrCreate(['name' => 'Haute-Corse','identifier' => '2B']);
        State::firstOrCreate(['name' => 'Ain','identifier' => '1']);
        State::firstOrCreate(['name' => 'Aisne','identifier' => '02']);
        State::firstOrCreate(['name' => 'Allier','identifier' => '03']);
        State::firstOrCreate(['name' => 'Alpes-de-Haute-Provence','identifier' => '04']);
        State::firstOrCreate(['name' => 'Haute-Alpes','identifier' => '05']);
        State::firstOrCreate(['name' => 'Alpes-Maritimes','identifier' => '06']);
        State::firstOrCreate(['name' => 'Ardèche','identifier' => '07']);
        State::firstOrCreate(['name' => 'Ardennes','identifier' => '08']);
        State::firstOrCreate(['name' => 'Ariège','identifier' => '09']);
        State::firstOrCreate(['name' => 'Aube','identifier' => '10']);
        State::firstOrCreate(['name' => 'Aude','identifier' => '11']);
        State::firstOrCreate(['name' => 'Aveyron','identifier' => '12']);
        State::firstOrCreate(['name' => 'Bouche-du-Rhône','identifier' => '13']);
        State::firstOrCreate(['name' => 'Calvados','identifier' => '14']);
        State::firstOrCreate(['name' => 'Cantal','identifier' => '15']);
        State::firstOrCreate(['name' => 'Charente','identifier' => '16']);
        State::firstOrCreate(['name' => 'Charente-Maritime','identifier' => '17']);
        State::firstOrCreate(['name' => 'Cher','identifier' => '18']);
        State::firstOrCreate(['name' => 'Corrèze','identifier' => '19']);
        State::firstOrCreate(['name' => 'Côte-D-or','identifier' => '21']);
        State::firstOrCreate(['name' => 'Côtes-D-Armor','identifier' => '22']);
        State::firstOrCreate(['name' => 'Creuse','identifier' => '23']);
        State::firstOrCreate(['name' => 'Dordogne','identifier' => '24']);
        State::firstOrCreate(['name' => 'Doubs','identifier' => '25']);
        State::firstOrCreate(['name' => 'Drôme','identifier' => '26']);
        State::firstOrCreate(['name' => 'Eure','identifier' => '27']);
        State::firstOrCreate(['name' => 'Eure-et-Loir','identifier' => '28']);
        State::firstOrCreate(['name' => 'Finistère','identifier' => '29']);
        State::firstOrCreate(['name' => 'Gard','identifier' => '30']);
        State::firstOrCreate(['name' => 'Haute-Garonne','identifier' => '31']);
        State::firstOrCreate(['name' => 'Gers','identifier' => '32']);
        State::firstOrCreate(['name' => 'Gironde','identifier' => '33']);
        State::firstOrCreate(['name' => 'Hérault','identifier' => '34']);
        State::firstOrCreate(['name' => 'Ille-Et-Vilaine','identifier' => '35']);
        State::firstOrCreate(['name' => 'Indre','identifier' => '36']);
        State::firstOrCreate(['name' => 'Indre-et-Loire','identifier' => '37']);
        State::firstOrCreate(['name' => 'Isère','identifier' => '38']);
        State::firstOrCreate(['name' => 'Jura','identifier' => '39']);
        State::firstOrCreate(['name' => 'Landes','identifier' => '40']);
        State::firstOrCreate(['name' => 'Loir-et-Cher','identifier' => '41']);
        State::firstOrCreate(['name' => 'Loire','identifier' => '42']);
        State::firstOrCreate(['name' => 'Haute-Loire','identifier' => '43']);
        State::firstOrCreate(['name' => 'Loire-Atlantique','identifier' => '44']);
        State::firstOrCreate(['name' => 'Loiret','identifier' => '45']);
        State::firstOrCreate(['name' => 'Lot','identifier' => '46']);
        State::firstOrCreate(['name' => 'Lot-et-Garonne','identifier' => '47']);
        State::firstOrCreate(['name' => 'Lozère','identifier' => '48']);
        State::firstOrCreate(['name' => 'Maine-et-Loire','identifier' => '49']);
        State::firstOrCreate(['name' => 'Manche','identifier' => '50']);
        State::firstOrCreate(['name' => 'Marne','identifier' => '51']);
        State::firstOrCreate(['name' => 'Haute-Marne','identifier' => '52']);
        State::firstOrCreate(['name' => 'Mayenne','identifier' => '53']);
        State::firstOrCreate(['name' => 'Meurthe-et-Moselle','identifier' => '54']);
        State::firstOrCreate(['name' => 'Meuse','identifier' => '55']);
        State::firstOrCreate(['name' => 'Morbihan','identifier' => '56']);
        State::firstOrCreate(['name' => 'Moselle','identifier' => '57']);
        State::firstOrCreate(['name' => 'Nièvre','identifier' => '58']);
        State::firstOrCreate(['name' => 'Nord','identifier' => '59']);
        State::firstOrCreate(['name' => 'Oise','identifier' => '60']);
        State::firstOrCreate(['name' => 'Orne','identifier' => '61']);
        State::firstOrCreate(['name' => 'Pas-de-Calais','identifier' => '62']);
        State::firstOrCreate(['name' => 'Puy-du-Dôme','identifier' => '63']);
        State::firstOrCreate(['name' => 'Pyrénées-Atlantique','identifier' => '64']);
        State::firstOrCreate(['name' => 'Hautes-Pyrénées','identifier' => '65']);
        State::firstOrCreate(['name' => 'Pyrénées-Orientales','identifier' => '66']);
        State::firstOrCreate(['name' => 'Bas-Rhin','identifier' => '67']);
        State::firstOrCreate(['name' => 'Haut-Rhin','identifier' => '68']);
        State::firstOrCreate(['name' => 'Rhône','identifier' => '69']);
        State::firstOrCreate(['name' => 'Haute-Saône','identifier' => '70']);
        State::firstOrCreate(['name' => 'Saône-et-Loire','identifier' => '71']);
        State::firstOrCreate(['name' => 'Sarthe','identifier' => '72']);
        State::firstOrCreate(['name' => 'Savoie','identifier' => '73']);
        State::firstOrCreate(['name' => 'Haute-Savoie','identifier' => '74']);
        State::firstOrCreate(['name' => 'Paris','identifier' => '75']);
        State::firstOrCreate(['name' => 'Seine-Maritime','identifier' => '76']);
        State::firstOrCreate(['name' => 'Seine-et-Marne','identifier' => '77']);
        State::firstOrCreate(['name' => 'Yvelines','identifier' => '78']);
        State::firstOrCreate(['name' => 'Deux-Sèvres','identifier' => '79']);
        State::firstOrCreate(['name' => 'Somme','identifier' => '80']);
        State::firstOrCreate(['name' => 'Tarn','identifier' => '81']);
        State::firstOrCreate(['name' => 'Tarn-et-Garonne','identifier' => '82']);
        State::firstOrCreate(['name' => 'Var','identifier' => '83']);
        State::firstOrCreate(['name' => 'Vaucluse','identifier' => '84']);
        State::firstOrCreate(['name' => 'Vendée','identifier' => '85']);
        State::firstOrCreate(['name' => 'Vienne','identifier' => '86']);
        State::firstOrCreate(['name' => 'Haute-Vienne','identifier' => '87']);
        State::firstOrCreate(['name' => 'Vosges','identifier' => '88']);
        State::firstOrCreate(['name' => 'Yonne','identifier' => '89']);
        State::firstOrCreate(['name' => 'Territoire-de-Belfort','identifier' => '90']);
        State::firstOrCreate(['name' => 'Essone','identifier' => '91']);
        State::firstOrCreate(['name' => 'Hauts-de-Seine','identifier' => '92']);
        State::firstOrCreate(['name' => 'Seine-Saint-Denis','identifier' => '93']);
        State::firstOrCreate(['name' => 'Val-de-Marne','identifier' => '94']);
        State::firstOrCreate(['name' => 'Val-d-Oise','identifier' => '95']);
    }
}
