<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UnitTableSeeder::class);
        $this->call(OperationTableSeeder::class);
        $this->call(BedTypeTableSeeder::class);
        $this->call(MedicalRightTableSeeder::class);
        $this->call(DoctorTableSeeder::class);
    }
}
