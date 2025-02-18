<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        $title = 'Il blog della salute';
        return view('homepage', ['titolo' => $title]);
    }
}
