<?php

namespace Portal\Home\Http;

use App\Http\Controllers\Controller;

use Automattic\WooCommerce\Client as ClientWoocommerce;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index(ClientWoocommerce $commerceClient)
    {

        $products = $commerceClient->get('product', [
            'tag'=> 22,
        ]);

        $banner = Http::get(env('CMS_ORIGIN_API').'/wp-json/wp/v2/pages/22', [])->json()['content']['rendered'];

        $testimonials = Http::get(env('CMS_ORIGIN_API').'/wp-json/sola_t/v1/get_all_testimonials', [])->json()['data'];

        return view('home.index', [
                                    'banner' => $banner,
                                    'testimonials' => $testimonials,
                                    'products' => $products,
                                ]);
    }

}
