<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class  DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name'=>'Felix Rustan',
            'email'=>'felix.rustan@binus.ac.id',
            'password' => Hash::make('asdfg'),
            'profile_picture' => 'profile_img_storage/default_picture.jpg',
            'username' => 'felixrustan123'
        ]);

        \DB::table('users')->insert([
            'name'=>'Samuel Dennis',
            'email'=>'samuel.dennis@binus.ac.id',
            'password' => Hash::make('asdfg'),
            'profile_picture' => 'profile_img_storage/default_picture.jpg',
            'username' => 'samueldennis123'
        ]);

        \DB::table('categories')->insert([
            'name'=>'Photograph'
        ]);

        \DB::table('categories')->insert([
            'name'=>'Lifestyle'
        ]);

        \DB::table('categories')->insert([
            'name'=>'Graphics & Design'
        ]);

        \DB::table('categories')->insert([
            'name'=>'Video & Animation'
        ]);

        \DB::table('products')->insert([
            'name' => 'Customizeable YoutTube',
            'user_id' => 1,
            'category_id' => 1,
            'price' => 250000,
            'description' =>
                'You can easily customize your YouTube channel introductions or outros based on template provided once you finish transaction. This can be easily done using our "Design Your Packet feature.',
            'image' => 'product_img_storage/product1_1.jpg'
        ]);

        \DB::table('products')->insert([
            'name' => 'Eiffel Tower Night Potrait',
            'user_id' => 1,
            'category_id' => 1,
            'price' => 100000,
            'description' =>
                'Eiffel tower lit up in Paris France',
            'image' => 'product_img_storage/product1_2.jpg'
        ]);

        \DB::table('products')->insert([
            'name' => 'NYC Panorama',
            'user_id' => 1,
            'category_id' => 1,
            'price' => 100000,
            'description' =>
                'After a long flight from Europe, I woke up at around 3am local time and searched for what to do… I found a trail to hike from just north of Hollywood to the Griffith Observatory. An incredible experience as the sun rose over the city of millions.',
            'image' => 'product_img_storage/product1_3.jpg'
        ]);

        \DB::table('products')->insert([
            'name' => 'Marimba Remix Ringtone',
            'user_id' => 1,
            'category_id' => 2,
            'price' => 60000,
            'description' =>
                'Enjoy music from your favorite hits with a personalized ringtone. Instantly get remixes of your favorite radio pop hits and rap songs.',
            'image' => 'product_img_storage/product2_1.jpg'
        ]);

        \DB::table('products')->insert([
            'name' => 'Tringtone',
            'user_id' => 1,
            'category_id' => 2,
            'price' => 55000,
            'description' =>
                'Tringtone is the most affordable, high quality ringtone app on the market. It’s compatible with most Android and iPhone devices and has a library of over 100,000 songs, with many more available as in-app purchases.',
            'image' => 'product_img_storage/product2_2.jpg'
        ]);

        \DB::table('products')->insert([
            'name' => 'Money Heist Wallpaper',
            'user_id' => 2,
            'category_id' => 3,
            'price' => 650000,
            'description' =>
                'Money Heist Wallpaper is a fresh, cool and entertaining wallpapers pack with money and crime scenes. You will be given 64 HQ wallpapers with 5192x3848 resolution. You can enjoy these in your home or share them on social media platforms.',
            'image' => 'product_img_storage/product3_1.jpg'
        ]);

        \DB::table('products')->insert([
            'name' => 'Drone Video Footage',
            'user_id' => 2,
            'category_id' => 4,
            'price' => 350000,
            'description' =>
                'Get an exclusive look from above at the san francisco bridge, the largest suspension bridge in the continental united states of america.',
            'image' => 'product_img_storage/product4_1.jpg'
        ]);
    }
}
