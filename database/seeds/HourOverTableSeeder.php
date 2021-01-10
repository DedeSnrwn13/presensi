<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HourOverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hour_overs')->insert([
            'hours_start' => '00:00',
            'hours_over'  => '00:00',
            'updated_by'  => 'Ini Admin',
        ]);
    }
}
