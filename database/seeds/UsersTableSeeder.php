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
        factory(\App\User::class,1)->create();
        //inserir usuario automaticamente




        //App\User::create([
            //'name' =>'Carlos',
            //'email'=>'carlos@hotmail.com',
            //'password'=>bcrypt('123456'),

       // ]);
        //criando usuario manualmente
    }
}
