<?php

namespace Portal\Courses\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function onlineCourses()
    {
        return view('courses.online.index', []);
    }

    public function presentialCourses()
    {
        return view('courses.presential.index', []);
    }
}
