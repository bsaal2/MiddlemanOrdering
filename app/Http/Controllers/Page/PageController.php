<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function index(){
            return view('pages.index')
                ->with('pageName','Home')
                ->with('pageDesc','');

    }

    public function instruction(){
        return view('pages.instruction')
            ->with('pageName','Instruction')
            ->with('pageDesc','How to use the site');
    }

    public function about(){
        return view('pages.about')
            ->with('pageName','About')
            ->with('pageDesc','Know more about us');
    }
}

