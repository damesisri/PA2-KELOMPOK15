<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'title' => 'Mie Goreng',
                'cover' => 'migoreng.jfif',
                'price' => '20000',
                // 'stock' => '100',
                'description' => 'Mie Goreng',
                'category' => 'Makanan',
            ],
            [
                'title' => 'MieGoreng Special',
                'cover' => 'migorengspecial.png',
                'price' => '30000',
                // 'stock' => '100',
                'description' => 'Mie Goreng Special',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Indomie Goreng',
                'cover' => 'indomie.jfif',
                'price' => '17000',
                // 'stock' => '100',
                'description' => 'Indomie Goreng',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Indomie Kuah',
                'cover' => 'indomiekuah.jfif',
                'price' => '15000',
                // 'stock' => '100',
                'description' => 'Indomie Kuah',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Nasi Soto',
                'cover' => 'nasisoto.jfif',
                'price' => '30000',
                // 'stock' => '100',
                'description' => 'Nasi Soto',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Nasi Goreng ',
                'cover' => 'nasigoreng.jfif',
                'price' => '20000',
                // 'stock' => '100',
                'description' => 'Nasi Goreng',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Nasi Goreng Special',
                'cover' => 'nasigorengspecial.jfif',
                'price' => '30000',
                // 'stock' => '100',
                'description' => 'Nasi Goreng Special',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Nasi Gurih',
                'cover' => 'nasigurih.jfif',
                'price' => '20000',
                // 'stock' => '100',
                'description' => 'Nasi Gurih',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Nasi Putih',
                'cover' => 'nasiputih.jfif',
                'price' => '10000',
                // 'stock' => '100',
                'description' => 'Nasi Putih',
                'category' => 'Makanan',
            ],

            [
                'title' => 'Lontong Sayur',
                'cover' => 'lontong.jpg',
                'price' => '15000',
                // 'stock' => '100',
                'description' => 'Lontong Sayur',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Perkedel',
                'cover' => 'perkedel.jfif',
                'price' => '5000',
                // 'stock' => '100',
                'description' => 'Perkedel',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Ikan Nila Goreng',
                'cover' => 'nilagoreng.jfif',
                'price' => '40000',
                // 'stock' => '100',
                'description' => 'Ikan Nila Goreng',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Telur Bebek Rebus/Sapi/Dadar',
                'cover' => 'telur.jpg',
                'price' => '40000',
                // 'stock' => '100',
                'description' => 'Telur Bebek Rebus/Sapi/Dadar',
                'category' => 'Makanan',
            ],
            [
                'title' => 'Aneka Jus Buah',
                'cover' => 'aneka.jfif',
                'price' => '15000',
                // 'stock' => '100',
                'description' => 'Aneka Jus Buah',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Jus Murni',
                'cover' => 'jus.jfif',
                'price' => '25000',
                // 'stock' => '100',
                'description' => 'Jus Murni',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Jus Pelangi',
                'cover' => 'juspelangi.jfif',
                'price' => '20000',
                // 'stock' => '100',
                'description' => 'Jus Pelangi',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Aqua Kecil',
                'cover' => 'akecil.jfif',
                'price' => '5000',
                // 'stock' => '100',
                'description' => 'Aqua Kecil',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Aqua Besar',
                'cover' => 'abesar.jfif',
                'price' => '10000',
                // 'stock' => '100',
                'description' => 'Aqua Besar',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Badak',
                'cover' => 'badak.jfif',
                'price' => '12000',
                // 'stock' => '100',
                'description' => 'Badak',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Teh ',
                'cover' => 'tehbotol.jfif',
                'price' => '10000',
                // 'stock' => '100',
                'description' => 'Teh Botol/Sprite/CocaCola/Fruity/Tebs/Purply Orange',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Kopi Hitam Panas',
                'cover' => 'kopihitam.jfif',
                'price' => '6000',
                // 'stock' => '100',
                'description' => 'Kopi Hitam Panan',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Cappucino Susu Panas',
                'cover' => 'susup.jfif',
                'price' => '13000',
                // 'stock' => '100',
                'description' => 'Cappucino Susu Panas',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Cappucino Susu Dingin',
                'cover' => 'susudingin.jfif',
                'price' => '13000',
                // 'stock' => '100',
                'description' => 'Cappucino Susu Dingin',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Teh Manis Panas',
                'cover' => 'tehmanispanas.jfif',
                'price' => '5000',
                // 'stock' => '100',
                'description' => 'Teh Manis Panas',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Teh Manis Dingin',
                'cover' => 'tehdingin.jfif',
                'price' => '10000',
                // 'stock' => '100',
                'description' => 'Teh Manis Dingin',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Teh/Kopi Susu',
                'cover' => 'kopisusu.jfif',
                'price' => '13000',
                // 'stock' => '100',
                'description' => 'Teh/Kopi Susu',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Bir Bintang',
                'cover' => 'bir.jfif',
                'price' => '50000',
                // 'stock' => '100',
                'description' => 'Bir Bintang',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Bir Hitam',
                'cover' => 'birhitam.jfif',
                'price' => '40000',
                // 'stock' => '100',
                'description' => 'Bir Hitam',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Nutrisari Panas',
                'cover' => 'nutrisarip.jfif',
                'price' => '8000',
                // 'stock' => '100',
                'description' => 'Nutrisari Panas',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Nutrisari Dingin',
                'cover' => 'nutrisaridingin.jfif',
                'price' => '10000',
                // 'stock' => '100',
                'description' => 'Nutrisari Dingin',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Coklat Panas',
                'cover' => 'coklatp.jfif',
                'price' => '8000',
                // 'stock' => '100',
                'description' => 'coklat Panas',
                'category' => 'Minuman',
            ],
            [
                'title' => 'coklat Dingin',
                'cover' => 'coklatd.jfif',
                'price' => '10000',
                // 'stock' => '100',
                'description' => 'coklat Dingin',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Hilo Panas',
                'cover' => 'hilopanas.jfif',
                'price' => '8000',
                // 'stock' => '100',
                'description' => 'Hilo Panas',
                'category' => 'Minuman',
            ],
            [
                'title' => 'Hilo Dingin',
                'cover' => 'hilodingin.jfif',
                'price' => '10000',
                // 'stock' => '100',
                'description' => 'Hilo Dingin',
                'category' => 'Minuman',
            ],
        );
        foreach ($data as $d) {
            Product::create([
                'title' => $d['title'],
                'cover' => $d['cover'],
                'price' => $d['price'],
                // 'stock' => $d['stock'],
                'description' => $d['description'],
                'category' => $d['category']
            ]);
        }
    }
}
