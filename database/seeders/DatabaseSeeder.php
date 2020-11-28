<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
          $this->call(MunicipioSeeder::class);
          $this->call(DocumentoSeeder::class);
          $this->call(LocalidadSeeder::class);
          $this->call(DomicilioSeeder::class);
          $this->call(PropiedadSeeder::class);
    }
}