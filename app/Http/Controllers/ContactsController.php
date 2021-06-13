<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $req)
    {
//        $validation = $req->validate([
//            'name' => 'required|max:50',
//            'email' => 'required|max:100|email:rfc',
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:500'
//        ]);
    }
}
