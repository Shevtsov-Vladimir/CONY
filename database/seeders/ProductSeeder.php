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
        ['vendor_code' => 45796111, 'title' => 'Колье', 'description' => 'Представляем вам колье женское на шею', 'price' => 800, 'quantity' => 10, 'photo' => '/img/колье-1.png', 'category_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796112, 'title' => 'Подвеска бижутерная на шею', 'description' => 'Подвеска с пиромидкой имеет универсальный дизайн, который', 'price' => 500, 'quantity' => 10, 'photo' => '/img/подвеска-1.png', 'category_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796113, 'title' => 'Серьги висячие гвоздики', 'description' => 'Серьги в форме лепестка из бижутерного сплава – оригинальный', 'price' => 600, 'quantity' => 10, 'photo' => '/img/Серьги-1.png', 'category_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796114, 'title' => 'Браслет на ногу', 'description' => 'Представляем вам женский браслет на ногу', 'price' => 550, 'quantity' => 10, 'photo' => '/img/Браслет1.png', 'category_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796115, 'title' => 'Серьги золотые', 'description' => 'Приобретите эти элегантные серьги с жемчугом, чтобы порадовать', 'price' => 600, 'quantity' => 10, 'photo' => '/img/Серьги2.png', 'category_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796116, 'title' => 'Браслет на руку', 'description' => 'Приобретите этот стильный и эстетичный женский браслет на руку', 'price' => 800, 'quantity' => 10, 'photo' => '/img/Браслет2.png', 'category_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796117, 'title' => 'Колье', 'description' => 'Приобретите это стильное и эстетичное колье с кулоном в', 'price' => 550, 'quantity' => 10, 'photo' => '/img/Колье2.png', 'category_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796118, 'title' => 'Браслет на ногу', 'description' => 'Представляем вам браслет на ногу анклет, который станет', 'price' => 800, 'quantity' => 10, 'photo' => '/img/Браслет3.png', 'category_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796119, 'title' => 'Колье с крестом', 'description' => 'Представляем вам колье на шею с кулоном крестом', 'price' => 800, 'quantity' => 10, 'photo' => '/img/Колье3.png', 'category_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796120, 'title' => 'Браслет стальной', 'description' => 'Подарите своей любимой особенный аксессуар, который', 'price' => 550, 'quantity' => 10, 'photo' => '/img/Браслет4.png', 'category_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796121, 'title' => 'Подвеска на шею', 'description' => 'Представляем вам колье женское на шею', 'price' => 800, 'quantity' => 10, 'photo' => '/img/Подвеска1.png', 'category_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796122, 'title' => 'Кольцо змейка', 'description' => 'Мужское кольцо со змеёй - это эстетичное и модное украшение', 'price' => 800, 'quantity' => 10, 'photo' => '/img/Кольцо1.png', 'category_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796123, 'title' => 'Браслет серебристый', 'description' => 'Представляю вашему вниманию женский браслет на руку', 'price' => 550, 'quantity' => 10, 'photo' => '/img/Браслет5.png', 'category_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796124, 'title' => 'Колье на шею', 'description' => 'Женское колье бижутерия на шею с кулоном из колец', 'price' => 800, 'quantity' => 10, 'photo' => '/img/Колье4.png', 'category_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796125, 'title' => 'Браслет на руку', 'description' => 'Приобретите этот женский браслет на руку и добавьте немного', 'price' => 800, 'quantity' => 10, 'photo' => '/img/Браслет6.png', 'category_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796126, 'title' => 'Браслет на руку', 'description' => 'Браслет женский на руку - это стильное и эстетичное украшение', 'price' => 550, 'quantity' => 10, 'photo' => '/img/Браслет7.png', 'category_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796127, 'title' => 'Колье на шею', 'description' => 'Это эстетичное и модное женское колье с сердцем', 'price' => 800, 'quantity' => 10, 'photo' => '/img/Колье5.png', 'category_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
        ['vendor_code' => 45796128, 'title' => 'Браслет', 'description' => 'Браслет женский на руку - это стильное и эстетичное украшение', 'price' => 550, 'quantity' => 10, 'photo' => '/img/Браслет8.jpg', 'category_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
     ]);   
    }
}
