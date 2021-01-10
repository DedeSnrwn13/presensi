<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HourStartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hour_starts')->insert([
            'hours_start' => '00:00',
            'hours_over'  => '00:00',
            'updated_by'  => 'Ini Admin',
        ]);
    }
}
