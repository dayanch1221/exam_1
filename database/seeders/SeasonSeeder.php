<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Winter', 'Summer', 'Autumn', 'Spring'] as $obj){
            Season::created(['name'=>$obj]);
        }
    }
}
