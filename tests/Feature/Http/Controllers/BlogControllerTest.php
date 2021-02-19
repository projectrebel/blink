<?php

namespace ProjectRebel\Blink\Tests\Feature\Http\Controllers;

use ProjectRebel\Blink\BlinkPost;
use ProjectRebel\Blink\Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class BlogControllerTest extends TestCase
{
    use WithFaker;

    public function testItReturnsOk()
    {
        $this->get('/blog')->assertOk();
    }

    public function testAllRoutesExist()
    {
        $this->get('/blog')->assertOk();
        $this->get('/blog/some-post')->assertOk();
    }

    public function testViewsAreLoaded()
    {
        $this->get('/blog')->assertSee('Latest posts');
    }

    private function setUpTestingData()
    {
        $blinkPost = new BlinkPost;
        $blinkPost->title = $this->faker->slug();
        $blinkPost->title = $this->faker->sentence();
        $blinkPost->save();
    }
}
