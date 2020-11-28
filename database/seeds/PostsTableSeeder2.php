<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('posts')->insert([
            'title' => 'Primeiro post',
            'description' => 'Teste de seeds',
            'content' => 'aprendendo seeds laravel',
            'slug' => 'Slug',
            'user_id' => 1,
            'is_active' => true
        ]);*/
        factory(\App\Post::class,30)->create();
    }
}
