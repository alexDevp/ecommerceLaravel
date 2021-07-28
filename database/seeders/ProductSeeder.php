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
        DB::table('products')->insert([
            [
                'name' => 'LG mobile',
                'price' => '200€',
                'description' => 'A big phone with bad specs, 1GB RAM.',
                'category' => 'mobile',
                'gallery' => 'https://www.lg.com/hk_en/images/mobile-phone/md05834409/gallery/large1-M400N-Rose-Gold.jpg'
            ],
            [
                'name' => 'Samsung mobile',
                'price' => '330€',
                'description' => 'Its just a phone.',
                'category' => 'mobile',
                'gallery' => 'https://www.mytrendyphone.pt/images/Samsung-Galaxy-A12-64GB-Black-8806090828126-25012021-01-p.jpg'
            ],
            [
                'name' => 'Hisense TV',
                'price' => '280€',
                'description' => 'A big tv thats bad as butter, it spreads itself',
                'category' => 'tvs',
                'gallery' => 'https://www.hisense.pt/wp-content/uploads/2019/05/B5100-1.jpg'
            ],
            [
                'name' => 'Samsung fridge',
                'price' => '699€',
                'description' => 'A fridge with a cofee machine, JK.',
                'category' => 'fridges',
                'gallery' => 'https://www.worten.pt/i/35c337934e06eec75869b0975123a144ee51c20a.jpg'
            ],
            [
                'name' => 'Iphone mobile',
                'price' => '1300€',
                'description' => 'Overrated phone, with a big price tag',
                'category' => 'mobile',
                'gallery' => 'https://www.nos.pt/particulares/PublishingImages/thumbiPhone11.png'
            ],

    ]);
    }
}
