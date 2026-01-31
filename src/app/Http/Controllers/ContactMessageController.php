<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Menyimpan pesan dari pengunjung
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = ContactMessage::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Pesan berhasil dikirim',
            'data' => $contact
        ], 201);
    }
}
