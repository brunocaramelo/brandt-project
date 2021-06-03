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
        Notification::route('mail', config('app.mail.attendance_address'))
            ->notify(new \App\Notifications\ContactDefault($params));

        return response()->json(['status' => 'success']);
    }
}
