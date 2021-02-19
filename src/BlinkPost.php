<?php

namespace ProjectRebel\Blink;

use Wink\WinkPost;

class BlinkPost extends WinkPost
{
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = round($wordCount / config('blink.wpm'));

        return $minutes;
    }
}
