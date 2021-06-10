<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMe;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::to('cvijetapanic2@gmail.com')
            ->send(new ContactMe($contact));

        return response()->json('Uspjesno ste poslali mail!');
    }
}
