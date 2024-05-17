<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Selling;

class SellingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $selling = file_get_contents(__DIR__ . '/data/selling.json');
        $selling = json_decode($selling, true);
        foreach ($selling as $sellingData) {
            $newSelling = new Selling();
            $newSelling->client_id = $sellingData['client_id'];
            $newSelling->amount = $sellingData['amount'];
            $newSelling->creation_date = $sellingData['creation_date'];
            $newSelling->stage_id = $sellingData['stage_id'];
            $newSelling->lost = $sellingData['lost'];
            $newSelling->closed = $sellingData['closed'];
            $newSelling->save();
        }
    }
}
