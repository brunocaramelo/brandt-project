<?php

namespace Portal\Institute\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstituteController extends Controller
{
    public function index()
    {
        return view('institute.index', []);
    }
}
