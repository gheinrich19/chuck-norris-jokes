<?php

namespace Gheinrich19\ChuckNorrisJokes;

class JokeFactory
{

    public function __construct(
        protected array       $premadeJokes = [
            "Chuck Norris can divide by zero.",
            "When Chuck Norris enters a room, he doesn't turn the lights on. He turns the dark off.",
            "Chuck Norris can slam a revolving door.",
            "Chuck Norris counted to infinity. Twice.",
            "Chuck Norris can unscramble an egg.",
            "When Chuck Norris does a push-up, he's pushing the Earth down.",
            "Chuck Norris can hear sign language.",
            "Chuck Norris can win a game of Connect Four in three moves.",
            "Chuck Norris doesn't wear a watch. He decides what time it is.",
            "Chuck Norris once made a Happy Meal cry."
        ],

        protected null|string $joke = null,
        protected array  $jokes = []

    )
    {
        if (empty($this->jokes)) {
            $this->jokes = $this->premadeJokes;
        }

    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

    /**
     * @return string
     */
    public function getJoke(): string
    {
        return $this->joke;
    }

    /**
     * @return array
     */
    public function getPremadeJokes(): array
    {
        return $this->premadeJokes;
    }

    public function setJoke(string $joke): void
    {
        $this->joke = $joke;

    }
}
