<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['title' => 'Серьги'],
            ['title' => 'Колье'],
            ['title' => 'Браслеты'],
            ['title' => 'Кольца'],
            ['title' => 'Подвески']
        ]);
    }
}
