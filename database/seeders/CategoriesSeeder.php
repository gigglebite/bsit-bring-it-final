<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
            'imagePath' => '/images/1.png',
            'category' => 'drinks'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/2.png',
            'category' => 'beer'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/3.png',
            'category' => 'staples'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/4.png',
            'category' => 'breakfast'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/5.png',
            'category' => 'snacks'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/6.png',
            'category' => 'bakery'
        ]);

        $category->save();
    }
}
