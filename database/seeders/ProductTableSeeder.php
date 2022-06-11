<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'imagePath' => '/images/product1.png',
            'title' => 'Sugar' ,
            'description' => 'Sugar is a term that includes all sweet carbohydrates.',
            'price' => 24.59
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product2.png',
            'title' => 'Peanuts' ,
            'description' => 'The aromatic associated with light-roast peanut and having legume-like character.',
            'price' => 122.62
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product3.png',
            'title' => 'Rice' ,
            'description' => 'Rice is the seed of the grass species Oryza sativa (Asian rice) or less commonly Oryza glaberrima (African rice).',
            'price' => 333.44
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product4.png',
            'title' => 'Bread' ,
            'description' => 'Edible starchy cereal grain and the grass plant (family Poaceae) by which it is produced.',
            'price' => 56.04
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product5.png',
            'title' => 'Coffee' ,
            'description' => 'A seed of the Coffea plant and the source for coffee.',
            'price' => 316.36
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product6.png',
            'title' => 'Cooking Oil' ,
            'description' => 'Cooking oil is plant, animal, or synthetic liquid fat used in frying, baking, and other types of cooking.',
            'price' => 139.80
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product7.png',
            'title' => 'Chicken Egg' ,
            'description' => 'The chicken egg is made up of approximately two-thirds white and one-third yolk.',
            'price' => 200
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product8.png',
            'title' => 'Garlic' ,
            'description' => 'A plant with long, flat grasslike leaves and a papery hood around the flowers.',
            'price' => 19.75
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product9.png',
            'title' => 'Salt' ,
            'description' => 'A colorless or white substance that is used in seasoning and preserving food and in industry.',
            'price' => 9.04
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product10.png',
            'title' => 'Onion' ,
            'description' => 'A round vegetable with a brown skin that grows underground.',
            'price' => 62.51
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product11.png',
            'title' => 'Soy Sauce' ,
            'description' => 'A rich savory sauce with salty and umami flavors.',
            'price' => 36.89
        ]);
        

        $product->save();

        // New products added for navigation purposes. 

        $product = new Product([
            'imagePath' => '/images/product12.png',
            'title' => 'Water' ,
            'description' => 'A small bottle containing water for drinking.',
            'price' => 15.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product13.png',
            'title' => 'Coca Cola' ,
            'description' => 'A bottle containing coke for drinking.',
            'price' => 15.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product14.png',
            'title' => 'Sprite' ,
            'description' => 'A bottle containing sprite for drinking.',
            'price' => 15.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product15.png',
            'title' => 'Royal' ,
            'description' => 'A bottle containing royal for drinking.',
            'price' => 15.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product16.png',
            'title' => 'Red Wine' ,
            'description' => 'An alcoholic drink created from the fermented juice extract of dark-',
            'price' => 165.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product17.png',
            'title' => 'Corn Flakes' ,
            'description' => 'A packaged cereal product formed from small toasted flakes of corn.',
            'price' => 185.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product18.png',
            'title' => 'Froot Loops' ,
            'description' => 'A brand of sweetened, fruit-flavored breakfast cereal produced by Kelloggs and sold in many countries.',
            'price' => 342.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product19.png',
            'title' => 'Koko Krunch' ,
            'description' => 'A yummy cereal with the taste of rich chocolate and is actually a processed food that is served with milk at breakfast.',
            'price' => 170.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product20.png',
            'title' => 'Martys Cracklin' ,
            'description' => 'Oishi Martys Cracklin Plain Salted is vegetarian chicharon.',
            'price' => 30.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product21.png',
            'title' => 'Boy Bawang' ,
            'description' => 'Has a lighter crunch than typical corn nuts, makes the most popular and delicious corn nuts in the Philippines.',
            'price' => 30.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product22.png',
            'title' => 'Vcut Potato Chips' ,
            'description' => 'Crispy chips with the taste of spicy BBQ. ',
            'price' => 30.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product23.png',
            'title' => 'Clover Chips' ,
            'description' => 'Clover Chips, as how a Filipino would say it, is not only a cheesy corn snack but it is also used for other dishes akin to bread crumbs for fried chicken.',
            'price' => 30.00
        ]);

        $product->save();

    }
}


/*
Sugar = 24.59
Sugar is a term that includes all sweet carbohydrates.
Peanuts = 122.62
The aromatic associated with light-roast peanut and having legume-like character.
Rice = 333.44
Edible starchy cereal grain and the grass plant (family Poaceae) by which it is produced.
Bread = 56.04
Edible starchy cereal grain and the grass plant (family Poaceae) by which it is produced.
Coffee = 316.36
A seed of the Coffea plant and the source for coffee.
Cooking Oil - 139.80
Cooking oil is plant, animal, or synthetic liquid fat used in frying, baking, and other types of cooking.
Chicken Egg - 200
The chicken egg is made up of approximately two-thirds white and one-third yolk.
Garlic - 19.75
A plant with long, flat grasslike leaves and a papery hood around the flowers.
Salt - 9.04
A colorless or white substance that is used in seasoning and preserving food and in industry.
Onion - 62.51
A round vegetable with a brown skin that grows underground.
Soy Sauce - 36.89
A rich savory sauce with salty and umami flavors.
12 Water 15 PHP
A small bottle containing water for drinking.
13 Coca Cola 15 PHP
A bottle containing coke for drinking.
14 Sprite 15 PHP
A bottle containing sprite for drinking.
15 Royal 15 PHP
A bottle containing royal for drinking.
16 Red Wine 165 PHP
An alcoholic drink created from the fermented juice extract of dark-skinned grapes.
17 Corn Flakes 185 PHP
A packaged cereal product formed from small toasted flakes of corn.
18 Froot Loops 342 PHP
A brand of sweetened, fruit-flavored breakfast cereal produced by Kellogg's and sold in many countries.
19 Koko Krunch 170 PHP
A yummy cereal with the taste of rich chocolate and is actually a processed food that is served with milk at breakfast.
20 Marty's Cracklin 30 PHP
Oishi Marty's Cracklin' Plain Salted is vegetarian chicharon.
21 Boy Bawang 30 PHP
Has a lighter crunch than typical corn nuts, makes the most popular and delicious corn nuts in the Philippines.
22 Vcut Potato Chips 30 PHP
Crispy chips with the taste of spicy BBQ. 
23 Clover Chips 30 PHP
Clover Chips, as how a Filipino would say it, is not only a cheesy corn snack but it is also used for other dishes akin to bread crumbs for fried chicken.
*/