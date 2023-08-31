<?php

namespace Database\Seeders;

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

        $tagSimulator = new Tag();
        $tagSimulator->name = 'Simulator';
        $tagSimulator->save();
    }
}
