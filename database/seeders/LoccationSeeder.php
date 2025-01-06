<?php

namespace Database\Seeders;

use App\Models\Loccation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoccationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Comp9', 'Beginner', 'Rus1', 'German'] as $obj ){
            Loccation::created([
                'name'=>$obj,
                'parent_id'=>$parentLocationId,
            ]);
        }
    }
}
