<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Users_Status;

class UsersStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users_Status::create(['name' => 'Activo','description' =>'Activo']);
        Users_Status::create(['name' => 'Bloqueado','description' =>'Bloqueado']);
        Users_Status::create(['name' => 'Inactivo','description' =>'Inactivo']);
    }
}
