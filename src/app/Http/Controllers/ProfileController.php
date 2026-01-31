<?php


namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Menampilkan profil coffee shop
     */
    public function index()
    {
        $profile = Profile::first();

        return response()->json([
            'status' => 'success',
            'data' => $profile
        ]);
    }
}
