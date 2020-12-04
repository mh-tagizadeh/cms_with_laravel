<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'News'
        ]);
        $post1 = Post::create([
            'title' => 'a',
            'description' => 'a',
            'content' => 'a',
            'category_id' => $category1->id,
            'image' => 'storage/post/1.jpg'
        ]);

        $category2 = Category::create([
            'name' => 'Programming'
        ]);

        $post2 = Post::create([
            'title' => 'b',
            'description' => 'b',
            'content' => 'b',
            'category_id' => $category2->id,
            'image' => '/storage/post/2.jpg'
        ]);

         $post3 = Post::create([
            'title' => 'b',
            'description' => 'b',
            'content' => 'b',
            'category_id' => $category1->id,
            'image' => 'storage/post/3.jpg'
        ]);

         $post4 = Post::create([
            'title' => 'b',
            'description' => 'b',
            'content' => 'b',
            'category_id' => $category2->id,
            'image' => '/storage/post/4.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'job'
        ]);

        $tag2 = Tag::create([
            'name' => 'customer'
        ]);
        $tag3 = Tag::create([
            'name' => 'recorder'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag2->id, $tag3->id]);

    }
}
