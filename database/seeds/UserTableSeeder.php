<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nombre' 		=> 'guillermo',
                'apellido' => 'romo',
                'email' 	=> 'guillospy@gmail.com',
                'user' 		=> 'guillospy',
                'password' 	=> \Hash::make('laravel'),
                'type' 		=> 'admin',
                'active' 	=> 1,
                'direccion' 	=> 'barranquilla calle 49B #2-36',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'nombre' 		=> 'Adela',
                'apellido' => 'Torres',
                'email' 	=> 'adela@correo.com',
                'user' 		=> 'adela',
                'password' 	=> \Hash::make('123456'),
                'type' 		=> 'user',
                'active' 	=> 1,
                'direccion' 	=> 'Tonala 321, Jalisco',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],

        );

        User::insert($data);
    }
}
