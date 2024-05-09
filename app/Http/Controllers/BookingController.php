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
            'name' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jenisMobil' => 'required|string|max:255',
            'transmisi' => 'required|string|max:255',
            'time' => 'required|date_format:H:i',
            'date' => 'required|date_format:Y-m-d',
            'driver' => 'required|boolean',
        ], [
            'name.required' => 'Nama harus diisi.',
            'phoneNumber.required' => 'Nomor HP harus diisi.',
            'address.required' => 'Alamat harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'jenisMobil.required' => 'Jenis mobil harus diisi.',
            'transmisi.required' => 'Transmisi harus diisi.',
            'time.required' => 'Jam harus diisi.',
            'time.date_format' => 'Format jam tidak valid.',
            'date.required' => 'Tanggal harus diisi.',
            'tanggal.date_format' => 'Format tanggal tidak valid.',
            'driver.required' => 'Pilihan supir harus diisi.',
            'driver.boolean' => 'Format pilihan supir tidak valid.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Mail::to('manurent@gmail.com')->send(new Booking(request()->all()));

        return response()->json(['message' => 'Email berhasil terkirim']);
    }
}
