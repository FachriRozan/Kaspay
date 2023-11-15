<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Sesuaikan dengan model User Anda
use Illuminate\Support\Facades\Hash;
class EditProfileController extends Controller
{
    public function indexedit(Request $request)
    {
        // Mengirimkan data pengguna ke halaman edit profile
        return view('editprofile', ['user'=>$user]);
    }
    public function editPassword(Request $request)
{
    // $user = auth()->user();
    // dd($user);
    // Validasi request
    // $hashedPasswordLama = Hash::make($request->password_lama);
    // dd($hashedPasswordLama);
    // $request->validate([
    //     'password_lama' => 'required',
    //     'password_baru' => 'required|min:8|confirmed', // Konfirmasi password baru
    // ]);

    // Ambil data pengguna dari database berdasarkan ID, misalnya menggunakan auth()->npm()
    // Memeriksa apakah password lama sesuai dengan password di database (yang telah di-hash menggunakan Bcrypt)
    if ($user&&Hash::check($request->password_lama, $user->password)) {
        // Jika password lama sesuai, hash password baru menggunakan Bcrypt
        $user->password = Hash::make($request->password_baru);
        $user->save();

        return redirect('/dashboard')->with('success', 'Password berhasil diubah.');
    } else {
        // Jika password lama tidak sesuai, kembalikan dengan pesan error
        return redirect('/editprofile')->with('error', 'Password lama tidak sesuai.');
    }
}
}
