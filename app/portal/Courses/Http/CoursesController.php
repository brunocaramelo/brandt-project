<?php

namespace Portal\Courses\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Automattic\WooCommerce\Client as ClientWoocommerce;

class CoursesController extends Controller
{
    public function index(ClientWoocommerce $commerceClient)
    {
        $products = $commerceClient->get('products',[
            'on_sale'=> true
        ]);

        return view('courses.index', [
            'products' => $products
        ]);
    }
}
