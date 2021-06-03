<?php

namespace Portal\About\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    public function index()
    {
        $testimonials = Http::get(config('cms.api_testimonial_url').'get_all_testimonials', [])->json()['data'];

        return view('about.index', [
            'testimonials' => $testimonials,
        ]);
    }
}
