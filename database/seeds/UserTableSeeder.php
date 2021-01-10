<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
             'name'           => 'Ini Admin',
             'role'           => 'admin',
             'email'          => 'admin@test.app',
             'password'       => bcrypt('smk1cbdpwadmin01'),
         ]);
    }
}
