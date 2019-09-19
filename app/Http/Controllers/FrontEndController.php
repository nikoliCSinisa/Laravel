<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }


    public function page( Page $page)
    {
        return view('pages.static', compact('page'));
    }

}
