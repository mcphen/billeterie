<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'pseudo'=>'Agence Mashallah Voyage',
            'nom'=>'test',
            'prenom'=>'oko',
            'photo'=>' ',
            'email'=>'admin@test.com', 
            'password'=>Hash::make('okok1234++'),
            'tel'=>'00242060000000',
            'minibio'=>' ',
            'piece_identite'=>' ',
            'role_id'=>1 
        ]);
    }
}
