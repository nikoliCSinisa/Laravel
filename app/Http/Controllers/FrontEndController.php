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


    public function page( Request $request, $slug)
    {

        // Get page from DB based on the slug

        $page = Page::where('slug', $slug)
                    ->first();   

        return view('pages.static', compact('page'));
    }

}
