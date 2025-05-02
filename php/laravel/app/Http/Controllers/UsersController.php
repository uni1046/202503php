<?php

namespace App\Http\Controllers;




use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class UsersController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('users.create');
    }

    #[NoReturn] public function store(Request $request): void
    {
        dd($request->all());
    }

    #[NoReturn] public function show(?int $id = 99): void
    {
        dd($id);
    }
}


