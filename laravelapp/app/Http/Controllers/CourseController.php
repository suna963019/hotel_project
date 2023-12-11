<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CourseController extends Controller
{
    $items = Course::all();
    return view('course.index', ['items' => $items]);
}
