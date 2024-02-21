<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    // public function greeting() {
    //     return view('blog.hello', ['name' => 'Fadly Nugraha Jati']);
    // }

    public function greeting() {
        return view('blog.hello')
            ->with('name', 'Fadly Nugraha Jati')
            ->with('occupation', 'Astronaut');
    }
}
