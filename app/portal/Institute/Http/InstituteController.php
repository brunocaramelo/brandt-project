<?php

namespace Portal\Institute\Http;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class InstituteController extends Controller
{
    public function index()
    {
        $instituteContent = Http::get(config('cms.api_url').'pages/', [
            'slug' => 'institute-content'
        ])->json()['content']['rendered'];

        return view('institute.index', [
            'content' => $instituteContent
        ]);
    }
}
