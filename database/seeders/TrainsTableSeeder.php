<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $newTrain->company = "Trenitalia";
        $newTrain->departure_station = "Milano Centrale";
        $newTrain->arrival_station= "Roma Termini";
        $newTrain->departure_time= "2026-04-03 14:30:00";
        $newTrain->arrival_time= "2026-04-03 17:45:00";
        $newTrain->train_code= "567XCV";
        $newTrain->carriages = 8;
        $newTrain->in_time = true;
        $newTrain->cancelled = false;

        $newTrain->save();
    }
}
