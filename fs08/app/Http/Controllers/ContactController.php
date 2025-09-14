<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'max:5000'],
            // Honeypot: must be empty if present
            'website' => ['nullable', 'size:0'],
        ]);

        Mail::to('fabiosants@fs08.tech')->send(new ContactMessage($data));

        return back()->with('status', 'Thanks! Your message has been sent.');
    }
}
