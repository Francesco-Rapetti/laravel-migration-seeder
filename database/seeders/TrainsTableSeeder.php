<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'departure_time' => '2023-01-01 10:00:00',
                'arrival_time' => '2023-01-01 12:00:00',
                'train_code' => 'TRE123',
                'number_of_carriages' => 20
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Napoli',
                'departure_time' => '2023-01-01 10:00:00',
                'arrival_time' => '2023-01-01 12:00:00',
                'train_code' => 'TRE124',
                'number_of_carriages' => 20
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 month', '+1 month');
            $newTrain->arrival_time = $faker->dateTimeBetween('-1 month', '+1 month');
            $newTrain->train_code = $faker->bothify('???-????');
            $newTrain->number_of_carriages = $faker->numberBetween(10, 30);
            $newTrain->save();
        }
    }
}
