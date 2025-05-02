<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OriginTag extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        OriginTag::factory()->create([
            'index' => 'Inari',
            'name' => 'Инари',
        ]);
    }
}
