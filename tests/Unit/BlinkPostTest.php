<?php

namespace ProjectRebel\Blink\Tests\Unit;

use ProjectRebel\Blink\BlinkPost;
use ProjectRebel\Blink\Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class BlinkPostTest extends TestCase
{
    use WithFaker;

    public function testItCalculatesAReadTimeUsingTheConfigValue()
    {
        $blinkPost = BlinkPost::factory()->make([
            'body' => $this->faker->paragraphs(50, true)
        ]);

        $wordCount = str_word_count(strip_tags($blinkPost->content));
        $this->assertEquals(round($wordCount / 265), $blinkPost->readingTime);

        config(['blink.wpm' => 25]);
        $this->assertEquals(round($wordCount / 25), $blinkPost->readingTime);
    }
}
