<?php

namespace Portal\About\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    public function index()
    {
        $testimonials = Http::get(env('CMS_ORIGIN_API').'/wp-json/sola_t/v1/get_all_testimonials', [])->json()['data'];

        return view('about.index', [
            'testimonials' => $testimonials,
        ]);
    }
}
