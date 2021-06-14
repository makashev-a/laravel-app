<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $req)
    {
        $contacts = new Contacts();
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('home')->with('success', 'Ваше сообщение было успешно отправлено!');

    }
}
