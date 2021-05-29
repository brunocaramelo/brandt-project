<?php

namespace Portal\Courses\Http;

use App\Http\Controllers\Controller;

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

        return view('courses.index', [
            'onlineProducts' => $onlineProducts,
            'presentialProducts' => $presentialProducts,
        ]);
    }
}
