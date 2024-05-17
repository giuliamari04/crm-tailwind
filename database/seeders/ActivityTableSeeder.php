<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Activity;

class activityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
     $activities = file_get_contents(__DIR__ . '/data/activity.json');
     $activities = json_decode($activities, true);

     foreach ($activities as $activityData) {
        $newActivity = new Activity();
        $newActivity->client_id = $activityData['client_id'];
        $newActivity->title = $activityData['title'];
        $newActivity->small_description = $activityData['small_description'];
        $newActivity->long_description = $activityData['long_description'];
        $newActivity->subject = $activityData['subject'];
        $newActivity->start_date = $activityData['start_date'];
        $newActivity->end_date = $activityData['end_date'];
        $newActivity->type_comunication = $activityData['type_comunication'];
        $newActivity->view_done = $activityData['view_done'];
        $newActivity->semaforo = $activityData['semaforo'];
        $newActivity->save();
    }

    }
}
