<?php

namespace App\Http\Controllers;

use App\AboutSlider;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {

        $sliders = AboutSlider::query()->get();

        return view('about', compact('sliders'));
    }
}
