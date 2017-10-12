<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://s3-media3.fl.yelpcdn.com/bphoto/aSyvi48iMx0sGMaTrWbmyQ/348s.jpg',
            'title' => 'Sumatra',
            'description' => 'Can you handle a dark roast?',
            'price' => 12
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://www.dynamiteroasting.com/wp-content/uploads/2014/05/Daymaker_r.jpg',
            'title' => 'DayMaker',
            'description' => 'Start your day right!',
            'price' => 10
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://www.dynamiteroasting.com/wp-content/uploads/2014/04/Header_store.jpg',
            'title' => 'Black Powder Espresso',
            'description' => 'DO ALL THE THINGS!',
            'price' => 14
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://www.dynamiteroasting.com/wp-content/uploads/2014/05/Header_farmers_2x.jpg',
            'title' => 'Mexico',
            'description' => 'A smooth coffee with a bright finish',
            'price' => 12
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://cdn.shopify.com/s/files/1/0226/4201/products/NCCoffee_Dyn_Suplicar_Web_grande.jpg?v=1503347242',
            'title' => 'Suplicar Clemencia',
            'description' => 'Dark roast blend',
            'price' => 10
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://recomm.nz/ginger_dynamite/images/Fotolia_17398760_M.jpg',
            'title' => 'Ethiopia',
            'description' => 'An African coffee with a hint of citrus',
            'price' => 15
        ]);
        $product->save();
    }
}
