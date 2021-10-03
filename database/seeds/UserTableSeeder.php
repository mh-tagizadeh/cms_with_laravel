<?php
use App\User;
use App\Post;
use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::where('email', 'admin@admin.com')->first();

        if (!$user) {
            User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => Hash::make('password'),
            ]);
        }


        factory(User::class, 50)->create()->each(function ($user) {
            $user->posts()->save(factory(Post::class)->make());
        });
    }
}
