<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Words Per Minute
    |--------------------------------------------------------------------------
    |
    | To calculate a reading time as seen on many blogs, a words per minute
    | value is used to calculate a reading time for an average user. Blink
    | uses Medium's default value as of February 2021.
    |
    */

    'wpm' => env('BLINK_WPM', 265),
];
