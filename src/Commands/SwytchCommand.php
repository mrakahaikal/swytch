<?php

namespace Mrakahaikal\Swytch\Commands;

use Illuminate\Console\Command;

class SwytchCommand extends Command
{
    public $signature = 'swytch';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
