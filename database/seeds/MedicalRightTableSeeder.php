<?php

use Illuminate\Database\Seeder;

class MedicalRightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medical_right')->insert([
            [
                'name_MedicalRight' => 'เบิกได้',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_MedicalRight' => 'จ่ายตรง',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_MedicalRight' => 'ประกันสังคม',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_MedicalRight' => 'บัตรทอง',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_MedicalRight' => 'อปท.',
                'created_at' => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
