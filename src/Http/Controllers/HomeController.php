<?php

namespace Ney\PackageBone\Http\Controllers;

class HomeController extends Controller
{
    public function welcome()
    {
        return view("package-bone::welcome");
    }
}
