<?php

namespace Space\Stimulsoft\Commands;

use Illuminate\Console\Command;

class StimulsoftCommand extends Command
{
    public $signature = 'stimulsoft-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
