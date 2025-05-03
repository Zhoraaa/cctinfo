<?php

namespace Database\Seeders;

use App\Models\OriginTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OriginTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Нежить
        OriginTag::factory()->create([
            'index' => 'undead',
            'name' => 'Нежить',
        ]);
        // Звероподобные
        OriginTag::factory()->create([
            'index' => 'beast-like',
            'name' => 'Звероподобные',
        ]);
        // Насекомоподобные
        OriginTag::factory()->create([
            'index' => 'insectoid',
            'name' => 'Насекомоподобные',
        ]);
        // Гуманоидные
        OriginTag::factory()->create([
            'index' => 'humanoid',
            'name' => 'Гуманоиды',
        ]);
        // Нелюди
        OriginTag::factory()->create([
            'index' => 'non-humans',
            'name' => 'Нелюди',
        ]);
        // Рыбоподобные
        OriginTag::factory()->create([
            'index' => 'fish-like',
            'name' => 'Рыбоподобные',
        ]);
    }
}
