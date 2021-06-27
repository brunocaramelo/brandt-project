<?php

namespace Portal\Contact\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;

use App\Notifications\ContactDefault;
use Portal\Contact\FormRequest\ContactRegisterRequest;

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
    public function sendStudent(Request $params)
    {
        Notification::route('mail', config('app.mail.attendance_address'))
            ->notify(new \App\Notifications\ContactToStudent($params));

        return response()->json(['status' => 'success']);
    }
    public function sendTeacher(Request $params)
    {
        Notification::route('mail', config('app.mail.attendance_address'))
            ->notify(new \App\Notifications\ContactToTeacher($params));

        return response()->json(['status' => 'success']);
    }

    public function sendPatient(Request $params)
    {
        Notification::route('mail', config('app.mail.attendance_address'))
            ->notify(new \App\Notifications\ContactToPatient($params));

        return response()->json(['status' => 'success']);
    }

    public function registerContactMailMarketing(ContactRegisterRequest $request)
    {
        Http::withHeaders([
            'X-Auth-Token' => config('mailmarketing.consumer_token'),
             'Content-Type' => 'application/json'
        ])->post(config('mailmarketing.api_url').'/accounts/'.config('mailmarketing.account_id').'/contacts',[
        'contact' => [
            'email' => $request->email,
            'list_ids' => [config('mailmarketing.references.defaultList.id')],
            'custom_fields' => [
                'nome' => $request->name
            ],
          ]])->json();

        return response()->json([
            'status' => 'success',
            'message' => 'Cadastro efetuado com sucesso'
        ]);

    }
}
