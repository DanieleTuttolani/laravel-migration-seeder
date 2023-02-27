<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\train;
class trainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0 ; $i < 10 ; $i++){
            $train = new Train();
            $train->code= $faker->shuffle('abpquvwxy7890td');
            $train->departure=  $faker->city();
            $train->arrival=  $faker->city();
            $train->departure_H= $faker->time();
            $train->arrival_H= $faker->time();
            $train->Number_of_carriages= $faker->randomDigit();
            $train->on_time= $faker->boolean();
            $train->on_retard= null;
            
            $train->save();
        }
        
    }
}
