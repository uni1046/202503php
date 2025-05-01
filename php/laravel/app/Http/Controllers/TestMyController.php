<?php

namespace app\Http\Controllers;

use Illuminate\Contracts\Foundation\Application as ContractApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class TestMyController extends Controller
{
    public function index(): ContractApplication|Factory|View|Application
    {
        return view('mytest.index');
    }
}


