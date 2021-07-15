<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'article_number' => "1234567890123",
            'name' => "Book",
            'description' => "This is a Book",
            'price' => "13.99",
            'image' => "storage/uploads/book.jpg"
        ]);
        DB::table('product')->insert([
            'article_number' => "1234567asda123",
            'name' => "PC",
            'description' => "This is a PC",
            'price' => "2599.99",
            'image' => "storage/uploads/PC.jpg"
        ]);
    }
}
