<?php

namespace Database\Seeders;

use App\Models\Toilet;
use Illuminate\Database\Seeder;

class ToiletSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'title' => 'Pemandian ',
                'cover' => 'jagung.jpg',
                'price' => '5000',
                'stock' => '10',
                'description' => 'Sangat la bersih',
            ],
            [
                'title' => 'Kolam ',
                'cover' => 'jagung.jpg',
                'price' => '10000',
                'description' => 'Sangat la bersih',
            ],

        );
        foreach ($data as $d) {
            Toilet::create([
                'title' => $d['title'],
                'cover' => $d['cover'],
                'price' => $d['price'],
                'stock' => $d['stock'],
                'description' => $d['description'],
            ]);
        }
    }
}
