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

        Pages::firstOrCreate(
            ['label' => 'email'],
            ['id' => '5', 'label' => 'email', 'title' => 'Admin email',  'content' => 'Contact@mapiole.com']
        );

        Pages::firstOrCreate(
            ['label' => 'phone'],
            ['id' => '6', 'label' => 'phone', 'title' => 'Admin phone',  'content' => '06.01.01.01.01']
        );

    }
}
