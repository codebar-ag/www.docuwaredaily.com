<?php

namespace App\Http\Controllers;

class StartController
{
    public function __invoke()
    {
        return view('start.index');
    }
}
