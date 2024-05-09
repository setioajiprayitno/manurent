<?php

namespace App\Http\Controllers;

use App\Mail\Booking;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{

    public function index()
    {
        return "test";
    }

    public function send()
    {
        $validator = Validator::make(request()->all(), [
            'nama' => 'required|string|max:255',
            'noHp' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jenisMobil' => 'required|string|max:255',
            'jam' => 'required|date_format:H:i',
            'tanggal' => 'required|date_format:Y-m-d',
            'supir' => 'required|boolean',
        ], [
            'nama.required' => 'Nama harus diisi.',
            'noHp.required' => 'Nomor HP harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'jenisMobil.required' => 'Jenis mobil harus diisi.',
            'jam.required' => 'Jam harus diisi.',
            'jam.date_format' => 'Format jam tidak valid.',
            'tanggal.required' => 'Tanggal harus diisi.',
            'tanggal.date_format' => 'Format tanggal tidak valid.',
            'supir.required' => 'Pilihan supir harus diisi.',
            'supir.boolean' => 'Format pilihan supir tidak valid.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Mail::to('manurent@gmail.com')->send(new Booking(request()->all()));

        return response()->json(['message' => 'Email berhasil terkirim']);
    }
}
