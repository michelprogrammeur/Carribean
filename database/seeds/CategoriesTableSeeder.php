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
                'title' => 'Diner sur la plage',
	            'file' => 'catImages/abstract.jpg',  
	            'uri' => 'abstract.jpg',
        	],
        	[
                'title' => 'Decoration de plage',
	            'file' => 'catImages/food.jpg', 
	            'uri' => 'food.jpeg',
        	],
        	[
                'title' => 'Animations',
	            'file' => 'catImages/bridge.jpg',
	            'uri' => 'bridge.jpg',
        	],
        	[
                'title' => 'Mariage en journée sur la plage',
	            'file' => 'catImages/fashion.jpg',
	            'uri' => 'fashion.jpg',
        	]
        ]);
    }
}
