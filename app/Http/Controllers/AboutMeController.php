<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Merloyd Jess Aroco',
            'bio' => 'From the mountains of Kabayan Benguet currently living at Tublay, Benguet.',
        ];
        return view('about', $data);
    } 
}
