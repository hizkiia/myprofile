<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Data yang akan dikirim ke email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Mengirim email
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('xzeed15x@gmail.com')
                ->subject('New Contact Message from ' . $data['name']);
        });

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
