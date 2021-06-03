<?php

namespace Portal\Courses\Http;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

use Automattic\WooCommerce\Client as ClientWoocommerce;

class CoursesController extends Controller
{
    public function index(ClientWoocommerce $commerceClient)
    {
        $onlineProducts = $commerceClient->get('products', [
            'category'=> 17,
        ]);
        $presentialProducts = $commerceClient->get('products', [
            'category'=> 18,
        ]);

        $eadBoxContent = Http::get(config('cms.api_url').'pages/162', [
            'slug' => 'course-ead-box'
        ])->json();
        dd($eadBoxContent);
        return view('courses.index', [
            'eadBox' => $eadBoxContent,
            'onlineProducts' => $onlineProducts,
            'presentialProducts' => $presentialProducts,
        ]);
    }
}
