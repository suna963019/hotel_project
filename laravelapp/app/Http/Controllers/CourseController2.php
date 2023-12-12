<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $items = Course::all();
        return view('course.index', ['items' => $items]);
    }
}
