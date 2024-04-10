<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();

        $newTrain->Azienda = "TrenItalia";
        $newTrain->Stazione_part = "Trabia";
        $newTrain->Stazione_arr = "Palermo Centrale";
        $newTrain->Ora_part = "7:30";
        $newTrain->Ora_arr = "11:45";
        $newTrain->train_code = "123456789012345";
        $newTrain->n_carrozze = "3";
        $newTrain->in_orario = "0";
        $newTrain->cancellato = "1";

        $newTrain->save();
        
    }
}
