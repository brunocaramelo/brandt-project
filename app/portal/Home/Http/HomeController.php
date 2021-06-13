<?php

namespace Portal\Home\Http;

use App\Http\Controllers\Controller;

use Automattic\WooCommerce\Client as ClientWoocommerce;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index(ClientWoocommerce $commerceClient)
    {

        $relevantProducts = $commerceClient->get('products', [
            'category'=> config('ecommerce.references.categories.relevants_products'),
            'status'=> 'publish',
        ]);

        $newProducts = $commerceClient->get('products', [
            'category'=> config('ecommerce.references.categories.new_products'),
            'status'=> 'publish',
        ]);

        $testimonials = Http::get(config('cms.api_testimonial_url').'get_all_testimonials', [])->json()['data'];

        $videos = Http::get(config('cms.api_url').'media', [
            'mime_type' => 'video/mp4'
        ])->json();

        return view('home.index', [
                                    'newProducts' => $newProducts,
                                    'testimonials' => $testimonials,
                                    'products' => $relevantProducts,
                                    'videos' => $videos,
                                ]);
    }

}
