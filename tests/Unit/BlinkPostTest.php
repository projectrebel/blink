<?php

namespace ProjectRebel\Blink\Tests\Unit;

use Illuminate\Foundation\Testing\WithFaker;
use ProjectRebel\Blink\BlinkPost;
use ProjectRebel\Blink\Tests\TestCase;

class BlinkPostTest extends TestCase
{
    use WithFaker;

    public function testItCalculatesAReadTimeUsingTheConfigValue()
    {
        $blinkPost = new BlinkPost;
        $blinkPost->body = $this->faker->paragraphs(50, true);

        $wordCount = str_word_count(strip_tags($blinkPost->content));
        $this->assertEquals(round($wordCount / 265), $blinkPost->readingTime);

        config(['blink.wpm' => 25]);
        $this->assertEquals(round($wordCount / 25), $blinkPost->readingTime);
    }
}
