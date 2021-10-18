<?php

namespace Database\Seeders;
use App\Models\Admin;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'      => 'Administrador',
            'email'     => 'admin@npitecnologia.com.br',
            'password'  => '$2y$10$XeVsClo4X6WD0ATBmCk1U.vvJc33Ql4ZsenRt.1VQEbt9a/cJfbZS',
            'status'    => 'Ativo',
            'profile'   => 'undraw_profile_2.svg',
        ]);
    }
}
