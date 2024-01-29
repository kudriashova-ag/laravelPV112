<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    function index(): View
    {
        $title = 'Main Page';
        $users = ['Bob', 'Tom', 'Bill'];
        $subtitle = '<em>Some text</em>';

        return view('index', compact('title', 'users', 'subtitle'));
    }

    function contacts(): View
    {
        return view('main.contacts');
    }

    function sendMessage(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:32',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //dd( $request->all() );
        return 123;
    }
}
