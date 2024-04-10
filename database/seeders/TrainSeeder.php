<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {

            $newTrain = new Train();
    
            $newTrain->company = "TrenItalia";
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->randomNumber(6, true);
            $newTrain->n_carriages = $faker->randomDigit();
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
    
            $newTrain->save();
        }
        
    }
}
