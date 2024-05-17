<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Dpi;

class DpiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dpi = file_get_contents(__DIR__ . '/data/dpi.json');
        $dpi = json_decode($dpi, true);

        foreach ($dpi as $dpiData) {
            $newDpi = new Dpi();
            $newDpi->code = $dpiData['code'];
            $newDpi->description = $dpiData['description'];
            $newDpi->quantity = $dpiData['quantity'];
            $newDpi->unit_price = $dpiData['unit_price'];
            $newDpi->save();
        }
    }
}
