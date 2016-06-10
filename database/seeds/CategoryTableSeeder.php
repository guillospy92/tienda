<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        $data = array(
            [
              'name' => 'super heroes',
                'slug' => 'super heroes',
                'description' =>'pelicula de animacion',
                'color' =>'#440022'

            ],
            [
                'name' => 'accion',
                'slug' => 'accion',
                'description' =>'peliculas que te pondran la adrenalina full',
                'color' =>'#440022'

            ]

        );

        Category::insert($data);

    }
}
