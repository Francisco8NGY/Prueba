<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Propiedad;
class PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Propiedad::create([
            'descripcion' => 'Bonita casa en Coquimatlan',
            'domicilio_particular' => 'Coquimatlan',
            'domicilio_id' => 1,
            'documentos_id' => 1,
            'edad' => 5,
            'long_descripcion' => 'Bonita casa en el centro de Coquimatlan con alberca y cochera para 3 carros',
            'm2construccion' => 10,
            'm2terreno' => 11,
            'no_banos' => 4,
            'no_niveles' => 2,
            'nombre_propietario' => 'Francisco Vazquez Delgado',
            'tipo_propiedad' => 1,
            'status' => 1,
            'precio' => 2000000.00
        ]);

        Propiedad::create([
            'descripcion' => 'Bonita casa en Comala',
            'domicilio_particular' => 'Comala',
            'domicilio_id' => 2,
            'documentos_id' => 2,
            'edad' => 7,
            'long_descripcion' => 'Bonita casa en el centro de Comala con alberca y cochera para 5 carros',
            'm2construccion' => 12,
            'm2terreno' => 15,
            'no_banos' => 5,
            'no_niveles' => 2,
            'nombre_propietario' => 'Perla Beatriz',
            'tipo_propiedad' => 1,
            'status' => 2,
            'precio' => 3500000.00
        ]);

        Propiedad::create([
            'descripcion' => 'Bonita casa en Colima',
            'domicilio_particular' => 'Colima',
            'domicilio_id' => 3,
            'documentos_id' => 3,
            'edad' => 2,
            'long_descripcion' => 'Bonita casa en la ciudad de Colima',
            'm2construccion' => 8,
            'm2terreno' => 10,
            'no_banos' => 3,
            'no_niveles' => 1,
            'nombre_propietario' => 'Francisco Vazquez Delgado',
            'tipo_propiedad' => 1,
            'status' => 1,
            'precio' => 3000000.00
        ]);

        Propiedad::create([
            'descripcion' => 'Bonita casa en Colima',
            'domicilio_particular' => 'Colima',
            'domicilio_id' => 3,
            'documentos_id' => 3,
            'edad' => 2,
            'long_descripcion' => 'Bonita casa en la ciudad de Colima',
            'm2construccion' => 8,
            'm2terreno' => 10,
            'no_banos' => 3,
            'no_niveles' => 1,
            'nombre_propietario' => 'Francisco Vazquez Delgado',
            'tipo_propiedad' => 1,
            'status' => 1,
            'precio' => 3000000.00
        ]);

        Propiedad::create([
            'descripcion' => 'Bonita casa en Colima',
            'domicilio_particular' => 'Colima',
            'domicilio_id' => 3,
            'documentos_id' => 3,
            'edad' => 2,
            'long_descripcion' => 'Bonita casa en la ciudad de Colima',
            'm2construccion' => 8,
            'm2terreno' => 10,
            'no_banos' => 3,
            'no_niveles' => 1,
            'nombre_propietario' => 'Francisco Vazquez Delgado',
            'tipo_propiedad' => 2,
            'status' => 1,
            'precio' => 3000000.00
        ]);

        Propiedad::create([
            'descripcion' => 'Bonita casa en Colima',
            'domicilio_particular' => 'Colima',
            'domicilio_id' => 3,
            'documentos_id' => 3,
            'edad' => 2,
            'long_descripcion' => 'Bonita casa en la ciudad de Colima',
            'm2construccion' => 8,
            'm2terreno' => 10,
            'no_banos' => 3,
            'no_niveles' => 1,
            'nombre_propietario' => 'Francisco Vazquez Delgado',
            'tipo_propiedad' => 2,
            'status' => 1,
            'precio' => 3000000.00
        ]);

        Propiedad::create([
            'descripcion' => 'Bonita casa en Colima',
            'domicilio_particular' => 'Colima',
            'domicilio_id' => 3,
            'documentos_id' => 3,
            'edad' => 2,
            'long_descripcion' => 'Bonita casa en la ciudad de Colima',
            'm2construccion' => 8,
            'm2terreno' => 10,
            'no_banos' => 3,
            'no_niveles' => 1,
            'nombre_propietario' => 'Francisco Vazquez Delgado',
            'tipo_propiedad' => 2,
            'status' => 2,
            'precio' => 3000000.00
        ]);

        Propiedad::create([
            'descripcion' => 'Bonita casa en Colima',
            'domicilio_particular' => 'Colima',
            'domicilio_id' => 3,
            'documentos_id' => 3,
            'edad' => 2,
            'long_descripcion' => 'Bonita casa en la ciudad de Colima',
            'm2construccion' => 8,
            'm2terreno' => 10,
            'no_banos' => 3,
            'no_niveles' => 1,
            'nombre_propietario' => 'Francisco Vazquez Delgado',
            'tipo_propiedad' => 3,
            'status' => 2,
            'precio' => 3000000.00
        ]);
    }
}
