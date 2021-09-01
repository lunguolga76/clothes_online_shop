<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Comment::factory()->count(50)->create();
    }
}
