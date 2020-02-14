<?php

use Illuminate\Database\Seeder;

class OperationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operation')->insert([
            [
                'name_Operation' => 'DSA',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Cerebral Angiogram',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Embolization with Balloon',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Embolization with Balloon occlusion test',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Embolization with NBCA',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Embolization with Coil',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Spinal Angiogram',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Spinal Embolization',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'PTBD',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'TACE',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'PVE',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'RFA',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'ESWL',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'CT guide biopsy lung',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'U/S guide biopsy lung',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'CT guide biopsy liver',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'U/S guide biopsy liver',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'CT guide biopsy kidney',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'U/S guide biopsy kidney',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'CT guide biopsy tumor',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'U/S guide biopsy tumor',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'EGD ',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'EGD with EVL',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Colonoscope',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'EGD with Colonooscope',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'ERCP',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'EVL',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'EUS',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Urine VMA',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Kidney biopsy',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Liver biopsy',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Lung bioosy',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'CAG',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'PCI',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'PBMV',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'PTCA',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'ASD closuer',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Permanent Pacemaker',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'Angioplasty',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'PTA',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name_Operation' => 'RHC',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'name_Operation' => 'Holter Monitoring ',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'name_Operation' => 'Large volume paracentesis',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'name_Operation' => 'on TPN',
                'created_at' => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
