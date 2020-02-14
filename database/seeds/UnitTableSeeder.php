<?php

use Illuminate\Database\Seeder;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit')->insert([
            [
                'name_Unit' => 'Gen 1',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Gen 2',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Gen 3',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Gen 4',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Urology',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'NS',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Plastic',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Orthopedic',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Cardio Vascular Thoracic surgery',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'GI Med',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Chest Medicine',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Neuro Medical',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'cardiology Medical',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Infectious Diseases Medical',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Nutrition Medical',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Air Medical',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Unit' => 'Nephrology Medcal',
                'created_at' => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
