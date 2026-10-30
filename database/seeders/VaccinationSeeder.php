<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vaccination;

class VaccinationSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'patient_name' => 'Red Genilla',
                'purok' => 'Purok 1',
                'vaccine' => 'BCG',
                'dose' => '1st dose',
                'scheduled_at' => '2026-09-15',
                'status' => 'Scheduled'
            ],
            [
                'patient_name' => 'Andrea Reyes',
                'purok' => 'Purok 2',
                'vaccine' => 'Pentavalent',
                'dose' => '2nd dose',
                'scheduled_at' => '2026-11-07',
                'status' => 'Scheduled'
            ],
            [
                'patient_name' => 'Joshua Lim',
                'purok' => 'Purok 3',
                'vaccine' => 'OPV',
                'dose' => '3rd dose',
                'scheduled_at' => '2026-10-15',
                'status' => 'Done'
            ],
            [
                'patient_name' => 'Sophia Garcia',
                'purok' => 'Purok 4',
                'vaccine' => 'MMR',
                'dose' => '1st dose',
                'scheduled_at' => '2026-10-20',
                'status' => 'Overdue'
            ],
            [
                'patient_name' => 'Daniel Cruz',
                'purok' => 'Purok 5',
                'vaccine' => 'Anti-Flu',
                'dose' => 'Annual',
                'scheduled_at' => '2026-11-12',
                'status' => 'Scheduled'
            ],
            [
                'patient_name' => 'Isabella Mendoza',
                'purok' => 'Purok 6',
                'vaccine' => 'Hepatitis B',
                'dose' => '1st dose',
                'scheduled_at' => '2026-11-15',
                'status' => 'Scheduled'
            ]
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}

