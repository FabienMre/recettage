<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        // Créer 20 utilisateurs
        factory(\App\Models\User::class, 5)->create();
    }
}
