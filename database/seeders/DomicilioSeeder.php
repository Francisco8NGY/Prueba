<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Domicilio;

class DomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domicilio::create([
            'calle' => 'Pinosuarez #33',
            'colonia' => 'centro',
            'municipio_id' => 2,
            'localidad_id' => 2,
            'zip_codigopostal' => '28000' 
        ]);

        Domicilio::create([
            'calle' => 'Hidalgo #199',
            'colonia' => 'centro',
            'municipio_id' => 1,
            'localidad_id' => 1,
            'zip_codigopostal' => '28400' 
        ]);

        Domicilio::create([
            'calle' => 'Melchor Ocampo #54',
            'colonia' => 'Lomas',
            'municipio_id' => 3,
            'localidad_id' => 3,
            'zip_codigopostal' => '28500' 
        ]);
    }
}