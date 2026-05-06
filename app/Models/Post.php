<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
     public static function all()
     {
         return [
             [
                 'id' => 1,
                 'title' => 'First Post',  
                 'slug' => 'first-post',
                 'author' => 'John Doe', 
                 'date' => '2024-06-01',
                 'kategori' => 'Programming',
                 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, dolores nulla? Cumque illum nam consectetur aliquid cupiditate, quam, sit error animi odio ipsa vero sequi molestias! Suscipit accusantium iure veritatis? Ab dicta officiis veniam quidem reprehenderit aperiam odio sed ut vero nam quod nulla corporis nesciunt itaque exercitationem, iusto vel..'
             ],
             [
                     'id' => 2,
                 'title' => 'Second Post', 
                 'slug' => 'second-post',
                 'author' => 'Jane Smith',
                 'date' => '2024-06-02',
                 'kategori' => 'Design',
                 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, dolores nulla? Cumque illum nam consectetur aliquid cupiditate, quam, sit error animi odio ipsa vero sequi molestias! Suscipit accusantium iure veritatis? Ab dicta officiis veniam quidem reprehenderit aperiam odio sed ut vero nam quod nulla corporis nesciunt itaque exercitationem, iusto vel..'
             ],
             [
                     'id' => 3,
                 'title' => 'Third Post',
                 'slug' => 'third-post',
                 'author' => 'Bob Johnson',
                 'date' => '2024-06-03',
                 'kategori' => 'Marketing',
                 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, dolores nulla? Cumque illum nam consectetur aliquid cupiditate, quam, sit error animi odio ipsa vero sequi molestias! Suscipit accusantium iure veritatis? Ab dicta officiis veniam quidem reprehenderit aperiam odio sed ut vero nam quod nulla corporis nesciunt itaque exercitationem, iusto vel..'
             ],
         ];
     }

     public static function find($slug)
     {
        return Arr::first(static::all(), fn($post) => $post['slug'] === $slug) ?? abort(404);
     }
}