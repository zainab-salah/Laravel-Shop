<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'art1',
            'description' => 'good',
            'photo' => 'https://i.pinimg.com/474x/74/e3/ba/74e3bab55838954d246edbc4a4a06782.jpg',
            'price' => 698.88
         ]);
 
         DB::table('products')->insert([
             'name' => 'art2',
             'description' => 'great',
             'photo' => 'https://i.pinimg.com/474x/dd/e9/8c/dde98c0ec9c8cbc33e87e7ba95e73f41.jpg',
             'price' => 983.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'art3',
             'description' => 'awesome',
             'photo' => 'https://i.pinimg.com/474x/e5/e7/72/e5e772400ef77708c6daf99580d5152a.jpg',
             'price' => 675.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'art4',
             'description' => 'bla bla',
             'photo' => 'https://i.pinimg.com/474x/6d/19/ed/6d19ede832257715fa01d2d830eb9052.jpg',
             'price' => 159.99
         ]);
 
         DB::table('products')->insert([
             'name' => 'art5',
             'description' => 'bad',
             'photo' => 'https://i.pinimg.com/474x/9b/a4/d3/9ba4d3295a3fc4d5f25cf36d9832a7ea.jpg',
             'price' => 68.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'art6',
             'description' => 'nice',
             'photo' => 'https://i.pinimg.com/474x/3a/c7/a2/3ac7a2d0150ee701e462fdff226da5e4.jpg',
             'price' => 129.99
         ]);
    }
}
