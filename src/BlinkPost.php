<?php

namespace ProjectRebel\Blink;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Wink\WinkPost;

class BlinkPost extends WinkPost
{
    use HasFactory;
    
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = round($wordCount / 265);

        return $minutes;
    }
}
