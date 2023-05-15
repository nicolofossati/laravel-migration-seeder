<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();

            /*
            $newTrain->id = 5;
            $newTrain->agency = 'Trenitalia';
            $newTrain->departure_station = 'Torino Porta Nuova';
            $newTrain->arrival_station = 'Milano Centrale';
            $newTrain->departure_time = '12/05/2023 18:32:00';
            $newTrain->arrival_time = '12/05/2023 20:00:00';
            $newTrain->train_code = '234566';
            $newTrain->carriage_number = 6;
            $newTrain->in_time = true;
            $newTrain->cancelled = false;
            $newTrain->save();*/
            $train->agency = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->date('Y_m_d') . " " . $faker->time();
            $train->arrival_time = $faker->date('Y_m_d') . " " . $faker->time();
            $train->train_code = $faker->randomNumber(5, true);
            $train->carriage_number = $faker->randomDigitNotNull();
            $train->in_time = $faker->numberBetween(0, 1);
            $train->cancelled = $faker->numberBetween(0, 1);

            $train->save();
        }
    }
}