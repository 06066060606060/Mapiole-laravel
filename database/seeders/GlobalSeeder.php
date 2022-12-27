<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GlobalSeeder extends Seeder
{

    public function run()
    {
        Pages::firstOrCreate(
            ['label' => 'company'],
            ['id' => '1', 'label' => 'company', 'title' => 'Company',  'content' => '']
        );

        Pages::firstOrCreate(
            ['label' => 'community'],
            ['id' => '2', 'label' => 'community', 'title' => 'Community',  'content' => '']
        );

        Pages::firstOrCreate(
            ['label' => 'career'],
            ['id' => '3', 'label' => 'career', 'title' => 'Career',  'content' => '']
        );

        Pages::firstOrCreate(
            ['label' => 'about'],
            ['id' => '4', 'label' => 'about', 'title' => 'A propos',  'content' => '']
        );

    }
}
