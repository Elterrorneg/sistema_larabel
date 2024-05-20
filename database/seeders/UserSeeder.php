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
        $user  = new User;
        $user->name = 'Administrador';
        $user->email = 'administrador@prueba.com';
        $user->password = 'administrador';
        $user->save();
        $user1  = new User;
        $user1->name = 'Brando';
        $user1->email = 'brandomedinarodriguez@gmail.com';
        $user1->password = 'Brandomedina22';
        $user1->save();
    }
}
