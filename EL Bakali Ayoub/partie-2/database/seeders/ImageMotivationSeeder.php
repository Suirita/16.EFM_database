<?php

namespace Database\Seeders;

use App\Models\ImageMotivation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageMotivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'employe_id' => 1, 
                'url' => 'https://images.pexels.com/photos/10268252/pexels-photo-10268252.jpeg',
                'views' => 0,
            ],
            [
                'employe_id' => 2, 
                'url' => 'https://images.pexels.com/photos/10268252/pexels-photo-10268252.jpeg',
                'views' => 0,
            ],
            [
                'employe_id' => 3,
                'url' => '           
',
                'views' => 0,
            ],
            [
                'employe_id' => 4, 
                'url' => 'https://images.pexels.com/photos/10368552/pexels-photo-10368552.jpeg',
                'views' => 0,
            ],
        ];

        foreach($images as $image){
            ImageMotivation::create($image);
        }
    }
}
