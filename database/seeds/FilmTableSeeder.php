<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // going 'Faker' 🙂 on the polls table.
        $faker = Faker::create();
        for($i = 1; $i <= 3 ; $i++)
        {
            $film = new \App\Film;
            $film->name = $faker->name;
            $film->ticket_price = $faker->numberBetween(1,100);
            $film->description = $faker->text;
            $film->release_date = $faker->date('Y-m-d','now');
            $film->rating = $faker->numberBetween(1,5);
            $film->genre = $faker->text;
            $film->country = $faker->country;
            $film->photo = $faker->imageUrl(640,480,null,true,null,false);
            $film->save();
            foreach ($faker->words as $option) {
                $comment = new \App\Comment;
                $comment->comment = $option;
                $comment->name =  $faker->name;;
                $film->comments()->save($comment);
            }
        }
    }
}
