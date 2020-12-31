<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Period;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class periodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Period::create([
            'Period_ID'=>'PI001',
            'Time_Period'=>'8.00AM-10.00AM',
            
        ]);
        Period::create([
            'Period_ID'=>'PI002',
            'Time_Period'=>'10.00AM-12.00AM',
            
        ]);
        Period::create([
            'Period_ID'=>'PI003',
            'Time_Period'=>'12.00PM-2.00PM',
            
        ]);
        Period::create([
            'Period_ID'=>'PI004',
            'Time_Period'=>'2.00PM-4.00PM',
            
        ]);
        Period::create([
            'Period_ID'=>'PI005',
            'Time_Period'=>'4.00PM-6.00PM',
            
        ]);
    }
}
