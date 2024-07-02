<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class SkillsController extends Controller
{
    public function index()
    {
        $skills = [
            [
                'name' => 'Programming Languages',
                'items' => ['PHP', 'JavaScript', 'Python', 'Java']
            ],
            [
                'name' => 'Frameworks & Libraries',
                'items' => ['Laravel', 'Vue.js', 'React', 'Django']
            ],
            [
                'name' => 'Tools',
                'items' => ['Git', 'VS Code', 'Postman', 'MySQL']
            ]
        ];

        return view('skills', compact('skills'));
    }
}
