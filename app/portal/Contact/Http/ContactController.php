<?php

namespace Portal\Contact\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use App\Http\Controllers\Controller;

use App\Notifications\ContactDefault;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index', []);
    }

    public function sendDefault(Request $params)
    {
        Notification::route('mail', env('MAIL_DEFAULT_TO'))
            ->notify(new \App\Notifications\ContactDefault($params));

        return response()->json(['status' => 'success']);
    }
}
