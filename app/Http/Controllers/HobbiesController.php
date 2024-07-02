<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HobbiesController extends Controller
{
    public function index()
    {
        $hobbies = [
            [
                'name' => 'Photography',
                'description' => 'Capturing moments with a camera.'
            ],
            [
                'name' => 'Reading',
                'description' => 'Exploring new worlds through books.'
            ],
            [
                'name' => 'Cooking',
                'description' => 'Creating delicious dishes in the kitchen.'
            ]
        ];

        return view('hobbies', compact('hobbies'));
    }
}
