<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Support\Facades\Hash;

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


        $author1 = App\User::create([
            'name' => 'John Doe1',
            'email' => 'jhonDoe1@email.com',
            'password' => Hash::make('password')
        ]);



        $author2 = App\User::create([
            'name' => 'Jahn Doe2',
            'email' => 'jhonDoe2@email.com',
            'password' => Hash::make('password')
        ]);

        $post1 = Post::create([
            'title' => 'Eminem',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Vitae ultricies leo integer malesuada nunc vel. Aliquam etiam erat velit scelerisque in. Viverra maecenas accumsan lacus vel facilisis. Orci sagittis eu volutpat odio facilisis mauris. Aenean pharetra magna ac placerat vestibulum lectus mauris. Nibh tellus molestie nunc non blandit massa enim nec. Orci a scelerisque purus semper eget duis at tellus at. Ullamcorper morbi tincidunt ornare massa eget egestas purus. Vivamus at augue eget arcu dictum. Nam aliquam sem et tortor consequat id porta nibh. Cursus metus aliquam eleifend mi. Faucibus purus in massa tempor nec feugiat nisl pretium fusce. Urna duis convallis convallis tellus. Dui sapien eget mi proin sed libero enim sed. Tincidunt augue interdum velit euismod in pellentesque. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Non enim praesent elementum facilisis leo vel fringilla est.
            Et sollicitudin ac orci phasellus egestas tellus rutrum. Aliquet porttitor lacus luctus accumsan tortor posuere. Congue eu consequat ac felis donec. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Mattis nunc sed blandit libero volutpat sed. Sapien eget mi proin sed libero enim sed faucibus turpis. Tellus elementum sagittis vitae et leo duis ut diam. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Rhoncus aenean vel elit scelerisque. Ipsum a arcu cursus vitae congue mauris rhoncus aenean. Vel quam elementum pulvinar etiam non. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Enim facilisis gravida neque convallis a. Malesuada proin libero nunc consequat interdum varius.
            Facilisis leo vel fringilla est. Convallis posuere morbi leo urna molestie. Auctor augue mauris augue neque gravida. Nunc id cursus metus aliquam eleifend mi in nulla. Vestibulum morbi blandit cursus risus at ultrices mi tempus. Ac tincidunt vitae semper quis lectus nulla at. Purus semper eget duis at. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Egestas pretium aenean pharetra magna. Nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi. Eget arcu dictum varius duis at consectetur lorem. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Est ultricies integer quis auctor elit sed vulputate mi sit.
            Nibh venenatis cras sed felis eget velit aliquet sagittis id. Eget nullam non nisi est sit amet. Vel pretium lectus quam id leo. Senectus et netus et malesuada. Et tortor at risus viverra adipiscing at in. In mollis nunc sed id. Malesuada fames ac turpis egestas integer eget. Massa ultricies mi quis hendrerit. Sem integer vitae justo eget magna. Aliquam etiam erat velit scelerisque in dictum non consectetur a. Erat imperdiet sed euismod nisi porta. Elementum curabitur vitae nunc sed velit dignissim sodales.',
            'category_id' => $category1->id,
            'image' => 'storage/Eminem.jpg',
            'user_id' => $author1->id
        ]);

        $category2 = Category::create([
            'name' => 'Programming'
        ]);

        $post2 = $author2->posts()->create([
            'title' => 'Logic',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Vitae ultricies leo integer malesuada nunc vel. Aliquam etiam erat velit scelerisque in. Viverra maecenas accumsan lacus vel facilisis. Orci sagittis eu volutpat odio facilisis mauris. Aenean pharetra magna ac placerat vestibulum lectus mauris. Nibh tellus molestie nunc non blandit massa enim nec. Orci a scelerisque purus semper eget duis at tellus at. Ullamcorper morbi tincidunt ornare massa eget egestas purus. Vivamus at augue eget arcu dictum. Nam aliquam sem et tortor consequat id porta nibh. Cursus metus aliquam eleifend mi. Faucibus purus in massa tempor nec feugiat nisl pretium fusce. Urna duis convallis convallis tellus. Dui sapien eget mi proin sed libero enim sed. Tincidunt augue interdum velit euismod in pellentesque. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Non enim praesent elementum facilisis leo vel fringilla est.
            Et sollicitudin ac orci phasellus egestas tellus rutrum. Aliquet porttitor lacus luctus accumsan tortor posuere. Congue eu consequat ac felis donec. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Mattis nunc sed blandit libero volutpat sed. Sapien eget mi proin sed libero enim sed faucibus turpis. Tellus elementum sagittis vitae et leo duis ut diam. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Rhoncus aenean vel elit scelerisque. Ipsum a arcu cursus vitae congue mauris rhoncus aenean. Vel quam elementum pulvinar etiam non. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Enim facilisis gravida neque convallis a. Malesuada proin libero nunc consequat interdum varius.
            Facilisis leo vel fringilla est. Convallis posuere morbi leo urna molestie. Auctor augue mauris augue neque gravida. Nunc id cursus metus aliquam eleifend mi in nulla. Vestibulum morbi blandit cursus risus at ultrices mi tempus. Ac tincidunt vitae semper quis lectus nulla at. Purus semper eget duis at. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Egestas pretium aenean pharetra magna. Nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi. Eget arcu dictum varius duis at consectetur lorem. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Est ultricies integer quis auctor elit sed vulputate mi sit.
            Nibh venenatis cras sed felis eget velit aliquet sagittis id. Eget nullam non nisi est sit amet. Vel pretium lectus quam id leo. Senectus et netus et malesuada. Et tortor at risus viverra adipiscing at in. In mollis nunc sed id. Malesuada fames ac turpis egestas integer eget. Massa ultricies mi quis hendrerit. Sem integer vitae justo eget magna. Aliquam etiam erat velit scelerisque in dictum non consectetur a. Erat imperdiet sed euismod nisi porta. Elementum curabitur vitae nunc sed velit dignissim sodales.',
            'category_id' => $category2->id,
            'image' => 'storage/Logic.jpg'
        ]);

         $post3 = $author1->posts()->create([
            'title' => 'NF',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Vitae ultricies leo integer malesuada nunc vel. Aliquam etiam erat velit scelerisque in. Viverra maecenas accumsan lacus vel facilisis. Orci sagittis eu volutpat odio facilisis mauris. Aenean pharetra magna ac placerat vestibulum lectus mauris. Nibh tellus molestie nunc non blandit massa enim nec. Orci a scelerisque purus semper eget duis at tellus at. Ullamcorper morbi tincidunt ornare massa eget egestas purus. Vivamus at augue eget arcu dictum. Nam aliquam sem et tortor consequat id porta nibh. Cursus metus aliquam eleifend mi. Faucibus purus in massa tempor nec feugiat nisl pretium fusce. Urna duis convallis convallis tellus. Dui sapien eget mi proin sed libero enim sed. Tincidunt augue interdum velit euismod in pellentesque. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Non enim praesent elementum facilisis leo vel fringilla est.
            Et sollicitudin ac orci phasellus egestas tellus rutrum. Aliquet porttitor lacus luctus accumsan tortor posuere. Congue eu consequat ac felis donec. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Mattis nunc sed blandit libero volutpat sed. Sapien eget mi proin sed libero enim sed faucibus turpis. Tellus elementum sagittis vitae et leo duis ut diam. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Rhoncus aenean vel elit scelerisque. Ipsum a arcu cursus vitae congue mauris rhoncus aenean. Vel quam elementum pulvinar etiam non. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Enim facilisis gravida neque convallis a. Malesuada proin libero nunc consequat interdum varius.
            Facilisis leo vel fringilla est. Convallis posuere morbi leo urna molestie. Auctor augue mauris augue neque gravida. Nunc id cursus metus aliquam eleifend mi in nulla. Vestibulum morbi blandit cursus risus at ultrices mi tempus. Ac tincidunt vitae semper quis lectus nulla at. Purus semper eget duis at. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Egestas pretium aenean pharetra magna. Nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi. Eget arcu dictum varius duis at consectetur lorem. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Est ultricies integer quis auctor elit sed vulputate mi sit.
            Nibh venenatis cras sed felis eget velit aliquet sagittis id. Eget nullam non nisi est sit amet. Vel pretium lectus quam id leo. Senectus et netus et malesuada. Et tortor at risus viverra adipiscing at in. In mollis nunc sed id. Malesuada fames ac turpis egestas integer eget. Massa ultricies mi quis hendrerit. Sem integer vitae justo eget magna. Aliquam etiam erat velit scelerisque in dictum non consectetur a. Erat imperdiet sed euismod nisi porta. Elementum curabitur vitae nunc sed velit dignissim sodales.',
            'category_id' => $category1->id,
            'image' => 'storage/NF.jpg',
        ]);

         $post4 = $author2->posts()->create([
            'title' => 'G-eazy',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Vitae ultricies leo integer malesuada nunc vel. Aliquam etiam erat velit scelerisque in. Viverra maecenas accumsan lacus vel facilisis. Orci sagittis eu volutpat odio facilisis mauris. Aenean pharetra magna ac placerat vestibulum lectus mauris. Nibh tellus molestie nunc non blandit massa enim nec. Orci a scelerisque purus semper eget duis at tellus at. Ullamcorper morbi tincidunt ornare massa eget egestas purus. Vivamus at augue eget arcu dictum. Nam aliquam sem et tortor consequat id porta nibh. Cursus metus aliquam eleifend mi. Faucibus purus in massa tempor nec feugiat nisl pretium fusce. Urna duis convallis convallis tellus. Dui sapien eget mi proin sed libero enim sed. Tincidunt augue interdum velit euismod in pellentesque. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Non enim praesent elementum facilisis leo vel fringilla est.
            Et sollicitudin ac orci phasellus egestas tellus rutrum. Aliquet porttitor lacus luctus accumsan tortor posuere. Congue eu consequat ac felis donec. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Mattis nunc sed blandit libero volutpat sed. Sapien eget mi proin sed libero enim sed faucibus turpis. Tellus elementum sagittis vitae et leo duis ut diam. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Rhoncus aenean vel elit scelerisque. Ipsum a arcu cursus vitae congue mauris rhoncus aenean. Vel quam elementum pulvinar etiam non. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Enim facilisis gravida neque convallis a. Malesuada proin libero nunc consequat interdum varius.
            Facilisis leo vel fringilla est. Convallis posuere morbi leo urna molestie. Auctor augue mauris augue neque gravida. Nunc id cursus metus aliquam eleifend mi in nulla. Vestibulum morbi blandit cursus risus at ultrices mi tempus. Ac tincidunt vitae semper quis lectus nulla at. Purus semper eget duis at. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Egestas pretium aenean pharetra magna. Nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi. Eget arcu dictum varius duis at consectetur lorem. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Est ultricies integer quis auctor elit sed vulputate mi sit.
            Nibh venenatis cras sed felis eget velit aliquet sagittis id. Eget nullam non nisi est sit amet. Vel pretium lectus quam id leo. Senectus et netus et malesuada. Et tortor at risus viverra adipiscing at in. In mollis nunc sed id. Malesuada fames ac turpis egestas integer eget. Massa ultricies mi quis hendrerit. Sem integer vitae justo eget magna. Aliquam etiam erat velit scelerisque in dictum non consectetur a. Erat imperdiet sed euismod nisi porta. Elementum curabitur vitae nunc sed velit dignissim sodales.',
            'category_id' => $category2->id,
            'image' => 'storage/G-eazy.jpg'
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
