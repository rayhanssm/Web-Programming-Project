<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('adminkel6'),
            'role'=>'admin'
        ]);

        Category::create([
            'name'=>'Technology'
        ]);

        Category::create([
            'name'=>'Mathematics'
        ]);

        Category::create([
            'name'=>'Science'
        ]);

        Book::create([
            'title' => 'Mobile Computing',
            'author' => 'Charles Harper',
            'year' => '2022',
            'category' => 'Technology',
            'category_id' => '1',
            'image' => '1.jpg'
        ]);

        Book::create([
            'title' => 'Differential Geometry',
            'author' => 'Heinrich W. Guggenheimer',
            'year' => '1977',
            'category' => 'Mathematics',
            'category_id' => '2',
            'image' => '2.jpg'
        ]);

        Book::create([
            'title' => 'Chemical Manipulation',
            'author' => 'Michael Faraday',
            'year' => '2018',
            'category' => 'Science',
            'category_id' => '3',
            'image' => '3.jpg'
        ]);
    }
}
