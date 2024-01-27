<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __invoke(Request $request)
    {

        Application::query()->create($request->except('_token'));

        return redirect()->back()->with('message', 'Success');

    }
}
