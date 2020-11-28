<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Documento;
class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documento::create([
            'escrituras' => 'e1.jpg',
            'foto_calle' => 'calle1.jpeg',
            'foto_fondo' => 'fondo1',
            'foto_frente' => 'frente1.jpg',
            'foto_interior' => 'interior1.jpg',
            'foto_nivel' => 'nivel1',
            'recibo_predial' => 'predial1'

        ]);

        Documento::create([
            'escrituras' => 'e2.jpg',
            'foto_calle' => 'calle2.jpeg',
            'foto_fondo' => 'fondo2',
            'foto_frente' => 'frente2.jpeg',
            'foto_interior' => 'interior2.jpg',
            'foto_nivel' => 'nivel2',
            'recibo_predial' => 'predial2'

        ]);

        Documento::create([
            'escrituras' => 'e3.jpg',
            'foto_calle' => 'calle3.jpg',
            'foto_fondo' => 'fondo3',
            'foto_frente' => 'frente3.jpeg',
            'foto_interior' => 'interior3.jpg',
            'foto_nivel' => 'nivel3',
            'recibo_predial' => 'predial3'

        ]);
    }
}
