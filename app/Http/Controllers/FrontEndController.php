<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function page( Request $request)
    {
        $page_title = 'Home Page';

            switch($request -> path()){
                case 'about':
                    $page_title = 'About Page';
                    break;
                case 'blog': 
                    $page_title = 'Blog Page';
                    break;
                case 'contact':
                    $page_title = 'Contact Page';
                    break;
            }
        

        return view('pages.static', ['page_title' => $page_title]);
    }


}
