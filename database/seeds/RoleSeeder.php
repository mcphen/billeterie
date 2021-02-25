<?php

use Illuminate\Database\Seeder;
use App\Roles;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create(['intitule'=>'administrateur']);
        Roles::create(['intitule'=>'gestionnaire']);
        Roles::create(['intitule'=>'client']);
    }
}
