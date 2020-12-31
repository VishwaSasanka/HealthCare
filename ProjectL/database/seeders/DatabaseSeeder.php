<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('all_users')->insert([
            'id'=> 'doc2',
            'password' => '123456',
            'roll' => 'doctor'
        ]);

        DB::table('all_users')->insert([
            'id'=> 'pat1',
            'password' => '1234',
            'roll' => 'patient'
        ]);
    }
}
