<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        $users = [
            [
                'name' => 'Noe',
                'age' => 10,
            ],
            [
                'name' => 'Hero',
                'age' => 11,
            ],
            [
                'name' => 'John',
                'age' => 18,
            ]
            ];

        return view(
            'dashboard',
            [
                'users' =>$users
            ]
        );
    }
}