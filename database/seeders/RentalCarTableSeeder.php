<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\CarRental;

class RentalCarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rentalCar = file_get_contents(__DIR__ . '/data/rentalCar.json');
        $rentalCar = json_decode($rentalCar, true);
        foreach ($rentalCar as $rentalCarData) {
            $newRentalCar = new carRental();
            $newRentalCar->car_model = $rentalCarData['car_model'];
            $newRentalCar->rental_start_date = $rentalCarData['rental_start_date'];
            $newRentalCar->rental_end_date = $rentalCarData['rental_end_date'];
            $newRentalCar->client_id = $rentalCarData['client_id'];
            $newRentalCar->save();
        }
    }
}
