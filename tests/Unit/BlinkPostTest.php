<?php

namespace ProjectRebel\Blink\Tests\Unit;

use ProjectRebel\Blink\BlinkPost;
use ProjectRebel\Blink\Tests\TestCase;

class BlinkPostTest extends TestCase
{
    public function testItCalculatesAReadTimeUsingTheConfigValue()
    {
        /*
            $table->uuid('id')->primary();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->boolean('published')->default(false);
            $table->dateTime('publish_date')->default('2018-10-10 00:00:00');
            $table->string('featured_image')->nullable();
            $table->string('featured_image_caption');
            $table->uuid('author_id')->index();
        */

        $blinkPost = BlinkPost::factory()->make();
        $blinkPost->body = <<<EOD
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugit alias, natus eum beatae aspernatur doloribus, culpa cupiditate illo deserunt repudiandae est tempora sint minus dolor nam placeat eius asperiores.
        EOD;
        
                
        $wordCount = str_word_count(strip_tags($blinkPost->content));
        $this->assertEquals(round($wordCount / 265), $blinkPost->readingTime);

        // config(['app.debug' => true]);
        // $this->assertEquals(round($wordCount / 265), $blinkPost->readingTime);
    }
}
