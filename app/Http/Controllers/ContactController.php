<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:5000',
        ]);

        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->from($data['email'], $data['name'])
                ->to('aldinamanya08@gmail.com', 'Teguh Aldianto')
                ->subject('[Portfolio] '.$data['subject']);
        });

        return back()->with('success', 'Pesan berhasil dikirim! Saya akan menghubungi Anda segera.');
    }
}
