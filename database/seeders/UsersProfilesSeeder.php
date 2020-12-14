<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Users_Profiles;

class UsersProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users_Profiles::create(['name' => 'Administrador']);
        Users_Profiles::create(['name' => 'Corredor']);
        Users_Profiles::create(['name' => 'Mayordomo']);
        Users_Profiles::create(['name' => 'Administrador de Edificio']);
        Users_Profiles::create(['name' => 'Empresa Externa']);
    }
}
