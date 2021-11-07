<?php

namespace Database\Seeders;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            "categoria" => "Política"
        ]);

        Categoria::create([
            "categoria" => "Esportes"
        ]);

        Categoria::create([
            "categoria" => "Economia"
        ]);

        Categoria::create([
            "categoria" => "Eleições"
        ]);

        Categoria::create([
            "categoria" => "Laser"
        ]);

        Categoria::create([
            "categoria" => "Entretenimento"
        ]);
    }
}
