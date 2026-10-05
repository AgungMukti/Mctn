<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'company' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Simpan ke log agar pesan tidak hilang meski SMTP belum dikonfigurasi.
        // Untuk mengirim email sungguhan, atur variabel MAIL_* di .env lalu
        // aktifkan blok Mail::raw di bawah ini.
        logger()->info('Pesan kontak baru dari website PLN MCTN', $validated);

        // Mail::raw(
        //     "Dari: {$validated['name']} ({$validated['email']})\nPerusahaan: {$validated['company']}\n\n{$validated['message']}",
        //     fn ($mail) => $mail->to('info@mctn.co.id')->subject('Pesan Baru dari Website')
        // );

        return back()->with('success', 'Terima kasih, pesan Anda telah kami terima. Tim kami akan segera menghubungi Anda.');
    }
}
