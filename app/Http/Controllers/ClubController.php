<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class ClubController extends Controller
{
    public function index(): View
    {
        $clubs = [
            ['name' => 'URDC', 'category' => 'Tech', 'day' => 'Rabu'],
            ['name' => 'Futsal', 'category' => 'Sports', 'day' => 'Jumat'],
            ['name' => 'Web Development', 'category' => 'Tech', 'day' => 'Senin'],
            ['name' => 'Rebana Diponegoro University', 'category' => 'Arts', 'day' => 'Sabtu'],
        ];
        return view('clubs.index', compact('clubs'));
    }
}
