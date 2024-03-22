<?php

namespace T73biz\LwBits\Commands;

use Illuminate\Console\Command;

class LwBitsCommand extends Command
{
    public $signature = 'lw-bits';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
