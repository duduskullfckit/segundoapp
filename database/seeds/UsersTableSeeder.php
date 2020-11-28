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
        //informando os registros a serem inseridos
       /* DB::table('users')->insert([
            'name' => 'Primeiro Usuario',
            'email' => 'emails@emails.com',
            'password' => bcrypt('senha')
        ]);*/
        //utilizando factory para gerar registros
        
        factory(\App\User::class,10)->create();
    }
}
