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
            'category'=> config('ecommerce.references.categories.online_products'),
            'status'=> 'publish',
        ]);
        $presentialProducts = $commerceClient->get('products', [
            'category'=> config('ecommerce.references.categories.presential_products'),
            'status'=> 'publish',
        ]);

        $eadBoxContent = Http::get(config('cms.api_url').'pages/', [
            'slug' => 'course-ead-box'
        ])->json()[0]['content']['rendered'];

        return view('courses.index', [
            'eadBox' => $eadBoxContent,
            'onlineProducts' => $onlineProducts,
            'presentialProducts' => $presentialProducts,
        ]);
    }
}
