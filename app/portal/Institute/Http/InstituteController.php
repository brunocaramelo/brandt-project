<?php

namespace Portal\Institute\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function onlineCourses()
    {
        return view('institute.index', []);
    }
}
