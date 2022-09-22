<?php

namespace Archboard\ClassLinkAuth\Commands;

use Illuminate\Console\Command;

class ClassLinkAuthCommand extends Command
{
    public $signature = 'classlink-auth';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
