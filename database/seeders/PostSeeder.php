<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(5);
        $cat = Category::find(1);

        Post::factory(2)->create([
            'user_id' => $user->id,
            'category_id' => $cat->id
        ]);
    }
}
