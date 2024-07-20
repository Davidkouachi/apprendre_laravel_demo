<?php

namespace App\Http\Controllers;


class Controller
{
    public function accueil()
    {
        return view('accueil.index');
    }

    public function user()
    {
        return view('user.new');
    }
}
