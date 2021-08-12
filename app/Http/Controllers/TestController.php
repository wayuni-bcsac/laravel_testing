<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent Strings</h1>';
        $slice = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice;

        $string = Str::of('Hello')->append('World');
        echo $string;

        $result = Str::of('LARAVEL')->lower();
        echo $result;

        $replaced_string = Str::of('Laravel 6.x')->replace('6.x','7.x');
        echo $replaced_string;

        $convertedText = Str::of('this is a title')->title();
        echo $convertedText;

        $slug = Str::of('Laravel Framework')->slug('-');
        echo $slug;

        $string = Str::of('/Laravel/')->trim('/');
        echo $string;

        
        
    }
}
