<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    private $views      = 'landingPage/';
    private $title      = 'Website Cemti';

    public function index()
    {
        return redirect('/home');
    }

    public function home()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'Home',
        ];

        return view('landingPage/index', $data);
    }

    
}
