<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'This is the About page.';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $title = 'This is the Services page.';
        return view('pages.services')->with('title', $title);
    }
}
