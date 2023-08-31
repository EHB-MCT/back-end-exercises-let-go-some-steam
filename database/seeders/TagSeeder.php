<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tagShooter = new Tag();
        $tagShooter->name = 'Shooter';
        $tagShooter->save();
        Game::factory()
            ->count(10)
            ->hasAttached($tagShooter)
            ->create();

        $tagSimulator = new Tag();
        $tagSimulator->name = 'Simulator';
        $tagSimulator->save();
        Game::factory()
            ->count(10)
            ->hasAttached($tagSimulator)
            ->create();
    }
}
