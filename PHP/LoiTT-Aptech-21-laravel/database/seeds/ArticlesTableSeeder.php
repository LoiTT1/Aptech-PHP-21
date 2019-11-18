<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<5;$i++){
            $exampleTitle = $faker -> sentence($nbWords = 6, $variableNbWords = true);
            Article::insert([
                'title' => $exampleTitle  ,
                'title_slug' => str_slug($exampleTitle),
                'description' => $faker -> sentence($nbWords = 20, $variableNbWords = true), 
                'content' => $faker -> sentence($nbWords = 50, $variableNbWords = true), 
            ]);
        }
    }
}
