<?php

namespace Portal\Home\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index()
    {
        $banner = Http::withHeaders([
            'Authorization' => 'Bearer '.env('CMS_ORIGIN_API_TOKEN')
        ])->get(env('CMS_ORIGIN_API'), [
            'rest_route' => '/wp/v2/pages/22'
        ])->json()['content']['rendered'];

        $testimonials = Http::withHeaders([
            'Authorization' => 'Bearer '.env('CMS_ORIGIN_API_TOKEN')
        ])->get(env('CMS_ORIGIN_API'), [
            'rest_route' => '/sola_t/v1/get_all_testimonials'
        ])->json()['data'];

        return view('home.index', [
                                    'banner' => $banner,
                                    'testimonials' => $testimonials,
                                ]);
    }

}
