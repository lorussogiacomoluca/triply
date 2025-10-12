<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $destinations = ['Roma', 'Parigi', 'Tokyo', 'New York', 'Barcellona', 'Bali', 'Maldive', 'Islanda', 'Grecia', 'Portogallo'];

        for ($i = 0; $i < 10; $i++) {
            $newTrip = new Trip();
            $newTrip->title = $faker->sentence(3);
            $newTrip->description = $faker->paragraph(4);
            $newTrip->price = $faker->randomFloat(2, 299, 4999);
            $newTrip->start_date = $faker->dateTimeBetween('now', '+6 months');
            $newTrip->end_date = $faker->dateTimeBetween($newTrip->start_date, $newTrip->start_date->format('Y-m-d') . ' +14 days');
            $newTrip->destination = $faker->randomElement($destinations);
            $newTrip->cover_image = 'https://picsum.photos/800/600?random=' . $i;
            $newTrip->save();
        }
    }
}
