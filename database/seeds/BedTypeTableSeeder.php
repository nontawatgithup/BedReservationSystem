<?php

use Illuminate\Database\Seeder;

class BedTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bed_type')->insert([
            [
                'name_BedType' => 'ทัตกรรม',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'Neuro IR',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'ส่องกล้องทางเดินอาหาร',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'ศัลกรรม Uro',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'ตรวจสวนหัวใจ',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'ผู้อำนวยการ',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'บุคลากร มข.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'นักศึกษา มข.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'ประกันสังคม ',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'GI',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_BedType' => 'Cardio',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
