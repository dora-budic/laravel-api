<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Flower;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $flower_obj = new Flower();

        $flower_obj->name = $faker->word();
        $flower_obj->description = $faker->text($maxNbChars = 200);
        $flower_obj->location = $faker->country();

        $flower_obj->save();
      }
    }
}
