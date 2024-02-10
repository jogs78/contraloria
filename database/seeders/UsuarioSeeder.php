<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Usuario();
        $nuevo->nombre = "Juan";
        $nuevo->clave = bcrypt("asd");
        $nuevo->tipo = "contralor";
        $nuevo->save();
        
    }
}
