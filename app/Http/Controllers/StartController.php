<?php

namespace App\Http\Controllers;

class StartController
{
    public function __invoke()
    {
        return redirect()->route('patient.auth.login');
    }
}
