<?php

namespace Gheinrich19\ChuckNorrisJokes\Http\Controllers;


use Gheinrich19\ChuckNorrisJokes\JokeFactory;
use Illuminate\Routing\Controller;

class ChuckNorrisController extends Controller
{
    public function __invoke()
    {
        $joke = new JokeFactory();
        
        return $joke->getRandomJoke();
    }
}