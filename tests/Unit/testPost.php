<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Tag;

class testPost extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     /** @test */
    public function testExample()
    {
        $this->assertTrue(true);

        $tags = Tag::pluck('id');
        $posts = Post::all();

        foreach($posts as $post) { $post->attach(rand($tags->first(),$tags->last())); }
    }
}
