<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        for ($i = 0; $i < 25; $i++) {
            
            $Train = new Train();
            //creo una data fittizzia
            $fakeDate=fake()->date('y-m-d');
            // Ne riempio le colonne
            $Train->agency = fake()->word();
            $Train->departure_station = "Stazione di ".fake()->word();
            $Train->arrival_station = "Stazione di ".fake()->word();
            $Train->departure_time = $fakeDate." ".fake()->time();
            $Train->arrival_time= $fakeDate." ".fake()->time();
            $Train->train_code=fake()->randomNumber(4, false);
            $Train->number_carriages=fake()->numberBetween(0, 25);
            $Train->timetable= fake()->boolean();
            $Train->deleted= fake()->boolean();

            // Lo salvo in persistenza
            $Train->save();
        }
    }
}
