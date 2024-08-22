<?php

namespace Gheinrich19\ChuckNorrisJokes\Tests;

use Gheinrich19\ChuckNorrisJokes\ChuckNorrisJokesServiceProvider;
use Gheinrich19\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Illuminate\Support\Facades\Artisan;
use PHPUnit\Framework\Attributes\Test;
use Orchestra\Testbench\TestCase;
use Gheinrich19\ChuckNorrisJokes\Facades\ChuckNorris;

class LaravelTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            ChuckNorrisJokesServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'ChuckNorris' => ChuckNorrisJoke::class
        ];
    }


    #[Test]
    public function the_console_command_returns_a_joke_test()
    {
        $this->withoutMockingConsoleOutput();

        ChuckNorris::shouldReceive('getRandomJoke')
            ->once()
            ->andReturn('some joke');

        $this->artisan('chuck-norris');

        $output = Artisan::output();

        $this->assertSame('some joke' . PHP_EOL, $output);
    }

    #[Test]
    public function the_route_can_be_accessed_test()
    {
        $this->get('/chuck-norris')
            ->assertStatus(200);
    }

}