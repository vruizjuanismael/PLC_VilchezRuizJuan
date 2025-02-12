<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Administrador';
        $user->email = 'administrador@prueba.com';
        $user->password = bcrypt('administrador');
        $user->save();

        User::create([
            'name' => 'Usuario de Ejemplo',
            'email' => 'usuario@example.com',
            'password' => bcrypt('usuario'), // Recuerda cambiar esto en producción
        ]);
    }
}