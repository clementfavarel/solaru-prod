<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.form');
    }

    public function submit(ContactRequest $request)
    {
        Mail::to(config('mail.from.address'))->send(new ContactFormMail($request->validated()));

        return back()->with('success', 'Merci pour votre message. Nous reviendrons vers vous très bientôt !');
    }
}
