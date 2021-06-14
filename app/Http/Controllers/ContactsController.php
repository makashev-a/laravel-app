<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $req)
    {
        $contacts = new Contacts;
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('home')->with('success', 'Ваше сообщение было успешно отправлено!');

    }

    public function allData()
    {
        return view('contacts_messages', ['data' => Contacts::orderBy('created_at', 'desc')->get()]);
    }

    public function showOneMessage($id)
    {
        return view('contacts_one_message', ['data' => Contacts::find($id)]);
    }

    public function updateMessage($id)
    {
        return view('contacts_update_message', ['data' => Contacts::find($id)]);
    }

    public function updateMessageSubmit($id, ContactsRequest $req)
    {
        $contacts = Contacts::find($id);
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('contacts-one-message', $id)->with('success', 'Ваше сообщение было успешно обновлено!');

    }

    public function deleteMessage($id)
    {
        Contacts::find($id)->delete();
        return redirect()->route('contacts-data')->with('success', 'Ваше сообщение было успешно удалено!');
    }

}
