<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Municipio::create([
            'name' => 'Colima'
        ]);

        Municipio::create([
            'name' => 'Coquimatlán'
        ]);

        Municipio::create([
            'name' => 'Aremeria'
        ]);

        Municipio::create([
            'name' => 'Comala'
        ]);

        Municipio::create([
            'name' => 'Cuauhtémoc'
        ]);

        Municipio::create([
            'name' => 'Ixtlahuacán'
        ]);

        Municipio::create([
            'name' => 'Manzanillo'
        ]);

        Municipio::create([
            'name' => 'Minatitlan'
        ]);

        Municipio::create([
            'name' => 'Tecomám'
        ]);

        Municipio::create([
            'name' => 'villa de Álvarez'
        ]);
        
    }
}
