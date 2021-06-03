<?php

namespace Portal\About\Http;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    public function index()
    {
        $aboutIntroduction = Http::get(config('cms.api_url').'pages/', [
            'slug' => 'about-introduction'
        ])->json()['content']['rendered'];
        
        $aboutActuation = Http::get(config('cms.api_url').'pages/', [
            'slug' => 'about-actuation'
        ])->json()['content']['rendered'];
        
        $testimonials = Http::get(config('cms.api_testimonial_url').'get_all_testimonials', [])->json()['data'];

        return view('about.index', [
            'introduction' => $aboutIntroduction,
            'actuation' => $aboutActuation,
            'testimonials' => $testimonials,
        ]);
    }
}
