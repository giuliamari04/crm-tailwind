<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Assignment;

class AssignmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assignments = file_get_contents(__DIR__ . '/data/assignments.json');
        $assignments = json_decode($assignments, true);
        foreach ($assignments as $assignment) {
            $newAssignment = new Assignment();
            $newAssignment->client_id = $assignment['client_id'];
            $newAssignment->resource_id = $assignment['resource_id'];
            $newAssignment->resource_type = $assignment['resource_type'];
            $newAssignment->assigned_to_id = $assignment['assigned_to_id'];
            $newAssignment->assignment_date = $assignment['assignment_date'];
            $newAssignment->return_date = $assignment['return_date'];
            $newAssignment->save();
        }
    }
}
