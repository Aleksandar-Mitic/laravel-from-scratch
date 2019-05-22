<?php

namespace BasicLaravel\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to the stadium',
        ];

        return view('contact', [

            'tasks' => $tasks

        ]);
    }

}
