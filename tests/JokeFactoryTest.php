<?php

namespace Gheinrich19\ChuckNorrisJokes\Tests;

use Gheinrich19\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    #[Test]
    public function it_returns_a_random_joke()
    {
        $jokeText = 'This is a joke';

        $jokes = new JokeFactory(jokes: [$jokeText]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame($jokeText, $joke);
    }

    #[Test]
    public function it_returns_a_predefined_joke()
    {

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $jokes->getPremadeJokes());
    }


    #[Test]
    public function it_sets_and_gets_a_specific_joke()
    {
        $jokeText = 'This is another joke';
        $jokes = new JokeFactory();
        $jokes->setJoke($jokeText);

        $joke = $jokes->getJoke();

        $this->assertSame($jokeText, $joke);
    }
}