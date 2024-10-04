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

        return back()->with('success', 'Thank you for your message. We\'ll get back to you soon!');
    }
}
