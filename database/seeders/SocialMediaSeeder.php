<?php

namespace Database\Seeders;

use App\Models\SosialMedia;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    public function run()
    {
        SosialMedia::insert([
            [
                'id' => 1,
                'nama' => 'Instagram',
                'icon' => 'instagram',
                'color' => '#e62d2d',
                'url' => 'https://www.instagram.com/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama' => 'Youtube',
                'icon' => 'youtube',
                'color' => '#ff0000',
                'url' => 'https://www.youtube.com/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nama' => 'Twitter',
                'icon' => 'twitter',
                'color' => '#6664c9',
                'url' => 'https://x.com/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
