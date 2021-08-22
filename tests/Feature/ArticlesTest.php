<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticlesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function articles_can_be_created()
    {
        $this->post('/articles', [
            'title' => 'Title',
            'body' => 'Body',
            'source' => 'Source'
        ]);

        $this->assertEquals(1, Article::all()->count());
    }

     /** @test */
     public function articles_can_be_deleted()
     {
         $this->post('/articles', [
             'title' => 'Title',
             'body' => 'Body',
             'source' => 'Source'
         ]);

         $this->delete('/articles/' . Article::first()->id);

         $this->assertEquals(0, Article::all()->count());
     }
}
