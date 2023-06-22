<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'makanan', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'makanan', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'makanan', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'makanan', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'makanan', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'makanan', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'makanan', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'minuman', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'minuman', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'minuman', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'minuman', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'minuman', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'minuman', 'price'=>10000],
            ['title'=>'Mie Goreng', 'description'=>'Ini deskripsi lorem1234', 'category'=>'minuman', 'price'=>10000],
        ];

        foreach ($products as $product) {
            Product::create([
                'title' => $product['title'],
                'description' => $product['description'],
                'category' => $product['category'],
                'price' => $product['price']
            ]);
        }
    }

}
