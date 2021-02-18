<?php

namespace ProjectRebel\Blink\Commands;

use Illuminate\Console\Command;

class BlinkCommand extends Command
{
    public $signature = 'blink';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
