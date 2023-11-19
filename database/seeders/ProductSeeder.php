<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            
            [
                'name'=>'Samsung Note S23',
                "price"=>"100000",
                "description"=>"Samsung Galaxy S23 Ultra 5G (Green, 12GB, 256GB Storage)",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/51hqXIAVXAL._SX679_.jpg"
            ],
            [
                'name'=>'IQOO Neo 7',
                "price"=>"30000",
                "description"=>"iQOO Neo 7 5G (Frost Blue, 8GB RAM, 128GB Storage) | Dimensity 8200 ",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/61JS7lF2aqL._SL1200_.jpg"
            ],
            [
                'name'=>'Redmi Note 12 Pro 5G',
                "price"=>"50000",
                "description"=>"Redmi Note 12 Pro 5G (Onyx Black, 12GB RAM, 256GB Storage)",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/615RJ27RuJL._SY741_.jpg"
            ],
            [
                'name'=>'Apple iPad',
                "price"=>"76000",
                "description"=>"Apple 2022 10.9-inch iPad (Wi-Fi, 64GB) - Blue (10th Generation)",
                "category"=>"ipad",
                "gallery"=>"https://m.media-amazon.com/images/I/61uA2UVnYWL._SX679_.jpg"
            ],
            [
                'name'=>'Oppo Reno10 5G',
                "price"=>"13000",
                "description"=>"Oppo Reno10 5G (Ice Blue, 8GB RAM, 256GB Storage)",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/5179O8XO9OL.jpg"
            ],
            [
                'name'=>'Vivo V29 5G',
                "price"=>"32000",
                "description"=>"Vivo V29 5G ((Red, 128 GB) (8 GB RAM))",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/71UCRQ9+CrL._SX569_.jpg"
            ],

            [
                'name'=>'Apple iPhone 15 Plus',
                "price"=>"76000",
                "description"=>"Apple iPhone 15 Plus (128 GB) - Black",
                "category"=>"Iphone",
                "gallery"=>"https://m.media-amazon.com/images/I/71zFRCcMS2L._SX679_.jpg"
            ],
            [
                'name'=>'Motorola razr 40 Ultra',
                "price"=>"79999",
                "description"=>"Motorola razr 40 Ultra (Viva Magenta, 8GB RAM, 256GB Storage) | 3.6 External AMOLED Display | 6.9 AMOLED 165Hz Display | 32MP Selfie Camera |30W TurboPower Charging | Android 13",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/617WN7I3E4L._SX679_.jpg"
            ],
            [
                'name'=>'Infinix Zero 30 5G',
                "price"=>"25000",
                "description"=>"Infinix Zero 30 5G (Rome Green, 256 GB) (12 GB RAM)",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/415kv93VNdL._SX300_SY300_QL70_FMwebp_.jpg"
            ],
            [
                'name'=>'OnePlus 11 5G',
                "price"=>"56000",
                "description"=>"OnePlus 11 5G (Eternal Green, 8GB RAM, 128GB Storage)",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/414+xRBltFL._SY300_SX300_.jpg"
            ],
            [
                'name'=>'Samsung Galaxy Z Fold4',
                "price"=>"139999",
                "description"=>"Samsung Galaxy Z Fold4 5G (Beige, 12GB RAM, 256GB Storage)",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/714QNdK8BWL._SX679_.jpg"
            ],
            [
                'name'=>'TECNO Pova 5',
                "price"=>"13999",
                "description"=>"TECNO Pova 5 (Mecha Black, 8GB RAM,128GB Storage) | Segment 1st 45W Ultra Fast Charging | 6000mAh Big Battery | 50MP AI Dual Camera | 3D Textured Design | 6.78”FHD+ Display",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/716h0yhX38L._SX679_.jpg"
            ],
            [
                'name'=>'Oppo Find N3 Flip 5G',
                "price"=>"85999",
                "description"=>"Oppo Find N3 Flip 5G (Sleek Black, 12GB RAM, 256GB Storage)",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/51tKDYk55vL.jpg"
            ],
            [
                'name'=>'Nokia G42 5G',
                "price"=>"12999",
                "description"=>"Nokia G42 5G | Snapdragon® 480+ 5G | 50MP Triple AI Camera | 11GB RAM (6GB RAM + 5GB Virtual RAM) | 128GB Storage | 5000mAh Battery | 2 Years Android Upgrades | 20W Charger Included | So Grey",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/71Zx7KyBrTL._SY741_.jpg"
            ],
            [
                'name'=>'Realme narzo 60 5G',
                "price"=>"19999",
                "description"=>"realme narzo 60 5G (Mars Orange,8GB+256GB) | 90Hz Super AMOLED Display | Ultra Premium Vegan Leather Design | with 33W SUPERVOOC Charger",
                "category"=>"Smartphone",
                "gallery"=>"https://m.media-amazon.com/images/I/8195A49fZbL._SX679_.jpg"
            ],
            
        ]);
    }
}