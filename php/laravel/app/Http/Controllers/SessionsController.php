<?php

namespace App\Http\Controllers;



use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use JetBrains\PhpStorm\NoReturn;

class SessionsController extends Controller
{
    public function create(): Factory|Application|View
    {
        return view('sessions.login');
    }

    #[NoReturn]public function store(Request $request): void
    {
        dd($request->all());
    }

    public function destroy(): Application|Redirector|RedirectResponse
    {
        auth()->logout();
        return  redirect('/login');
    }
}
