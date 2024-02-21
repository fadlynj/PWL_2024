<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Fadly Nugraha Jati 2241720149';
    }

    public function articles($id) {
        return 'Halaman artikel dengan Id ' . $id;
    }
}
