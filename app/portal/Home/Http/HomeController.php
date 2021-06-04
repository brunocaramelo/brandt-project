<?php

namespace Portal\Home\Http;

use App\Http\Controllers\Controller;

use Automattic\WooCommerce\Client as ClientWoocommerce;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index(ClientWoocommerce $commerceClient)
    {

        $products = $commerceClient->get('products', [
            'tag'=> 22,
            'status'=> 'publish',
        ]);

        $banner = Http::get(config('cms.api_url').'pages/', [
            'slug' => 'banner-home'
        ])->json()[0]['content']['rendered'];

        $testimonials = Http::get(config('cms.api_testimonial_url').'get_all_testimonials', [])->json()['data'];

        $videos = Http::get(config('cms.api_url').'media', [
            'mime_type' => 'video/mp4'
        ])->json();

        return view('home.index', [
                                    'banner' => $banner,
                                    'testimonials' => $testimonials,
                                    'products' => $products,
                                    'videos' => $videos,
                                ]);
    }

}
