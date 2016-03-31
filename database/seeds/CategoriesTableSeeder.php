<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
                'title' => 'Mariage en bord de mer',
	            'file' => 'catImages/categories-1.jpg',  
	            'uri' => 'abstract.jpg',
        	],
        	[
                'title' => 'Réceptions dans les cadres idylliques',
	            'file' => 'catImages/categories-2.jpg', 
	            'uri' => 'food.jpeg',
        	],
        	[
                'title' => 'Activités organisées par notre service conciergerie',
	            'file' => 'catImages/categories-3.jpg',
	            'uri' => 'bridge.jpg',
        	],
        	[
                'title' => 'Photos de couple',
	            'file' => 'catImages/categories-4.jpg',
	            'uri' => 'fashion.jpg',
        	]
        ]);
    }
}
