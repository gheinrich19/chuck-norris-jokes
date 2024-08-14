<?php

namespace Gheinrich19\ChuckNorrisJokes\Console;

use Gheinrich19\ChuckNorrisJokes\Facades\ChuckNorris;
use Illuminate\Console\Command;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Output a funny Chuck joke.';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}