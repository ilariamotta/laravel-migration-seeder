<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $newTrain = new Train();
        // $newTrain->company = "Trenitalia";
        // $newTrain->departure_station = "Milano Centrale";
        // $newTrain->arrival_station= "Roma Termini";
        // $newTrain->departure_time= "2026-04-03 14:30:00";
        // $newTrain->arrival_time= "2026-04-03 17:45:00";
        // $newTrain->train_code= "567XCV";
        // $newTrain->carriages = 8;
        // $newTrain->in_time = true;
        // $newTrain->cancelled = false;

        // $newTrain->save();


    $companies = ['Trenitalia', 'Italo', 'Trenord'];

    $stations = [
    'Milano Centrale',
    'Roma Termini',
    'Torino Porta Nuova',
    'Napoli Centrale',
    'Bologna Centrale',
    'Firenze S. M. Novella',
    'Venezia Santa Lucia',
    'Genova Piazza Principe',
    'Bari Centrale',
    'Verona Porta Nuova'
];
for ($i = 0; $i < 15; $i++) {
    $newTrain = new Train();

    $newTrain->company = $faker->randomElement($companies);


    $newTrain->departure_station = $faker->randomElement($stations);
    $arrivalStation = $faker->randomElement($stations);
    while ($newTrain->departure_station === $arrivalStation) {
    $arrivalStation = $faker->randomElement($stations);
}
    $newTrain->arrival_station = $arrivalStation;

    $departureTime = $faker->dateTimeBetween('now', '+1 month');
    $newTrain->departure_time = $departureTime->format('Y-m-d H:i:s');
    $newTrain->arrival_time = $faker->dateTimeBetween('+1 month', '+2 months')->format('Y-m-d H:i:s');

    $newTrain->train_code = $faker->unique()->regexify('[A-Z]{3}[0-4]{3}');

    $newTrain->carriages = $faker->numberBetween(4, 12);

    $newTrain->in_time= $faker->boolean(50);
    if ($newTrain->in_time) {
        $newTrain->cancelled = false;
    } else {
        $newTrain->cancelled = $faker->boolean(50);
    }

$newTrain->save();

}




    }
}
