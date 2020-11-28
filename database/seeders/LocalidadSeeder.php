<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Localidad;
class LocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Localidad::create([
            'name' => 'Jala',
            'municipio_id' => 1
        ]);

        Localidad::create([
            'name' => 'Pueblo Juarez',
            'municipio_id' => 2
        ]);

        Localidad::create([
            'name' => 'Chivato',
            'municipio_id' => 3
        ]);
    }
}
