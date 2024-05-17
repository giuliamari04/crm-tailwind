<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Stage;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sales_stage = file_get_contents(__DIR__ . '/data/sales_stage.json');
        $sales_stage = json_decode($sales_stage, true);

        foreach ($sales_stage as $salesStageData) {
            $newStage = new Stage();
            $newStage->stage_name = $salesStageData['stage_name'];
            $newStage->description = $salesStageData['description'];
            $newStage->save();
    }
}
}
