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
    
            $newTrain->Azienda = "TrenItalia";
            $newTrain->Stazione_part = $faker->city();
            $newTrain->Stazione_arr = $faker->city();
            $newTrain->data_part = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->Ora_part = $faker->time();
            $newTrain->Ora_arr = $faker->time();
            $newTrain->train_code = $faker->randomNumber(6, true);
            $newTrain->n_carrozze = $faker->randomDigit();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
    
            $newTrain->save();
        }
        
    }
}
