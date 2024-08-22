<?php

namespace Gheinrich19\ChuckNorrisJokes\Http\Controllers;


use Gheinrich19\ChuckNorrisJokes\Facades\ChuckNorris;
use Illuminate\Routing\Controller;

class ChuckNorrisController extends Controller
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}