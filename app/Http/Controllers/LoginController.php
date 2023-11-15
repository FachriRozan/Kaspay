<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login1');
    } 
    public function login(Request $request){
            $user = User::where('username', $request->username)->first();
            // dd($user);
            // Validasi pengguna
            if (!$user) {
                return redirect()->back()->with('error', 'Username not found');
            }
            // Validasi kata sandi (gunakan metode keamanan yang benar)
            if ($request->password==$user->password) {
                if ($user->role == true) {
                    // Menyimpan informasi pengguna ke dalam session
                    session()->put('user', $user);
                    return view('admindashboard',['admin' => $user]);
                } else {
                    // Menyimpan informasi pengguna ke dalam session
                    session()->put('user', $user);
                    return view('dashboard',['user' => $user]);
                }
            } else {
                return redirect()->back();
            }
        }

    public function logout1(Request $request)
    {

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        session()->flush();
        return view('login1');
    }
    public function indexedit(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('editprofile', ['user'=>$user]);
    }
    public function indexkeuangan(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('keuangan', ['user'=>$user]);
    }
    public function indexbendahara(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('infobendahara', ['user'=>$user]);
    }
    public function indexbendaharaadmin(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('infobendaharaadmin', ['user'=>$user]);
    }
    public function indexkeuanganadmin(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('keuanganadmin', ['user'=>$user]);
    }
    public function indexuseradmin(Request $request)
{
    $users = User::all();
    // dd($users);
    // Mengirimkan data pengguna ke halaman edit profile
    return view('useradmin', ['users'=>$users]);
}
    public function indexpembayaranadmin(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('pembayaranadmin', ['user'=>$user]);
    }
    public function indexpembayaran(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('pembayaran', ['user'=>$user]);
    }
    public function indexdashboard(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('dashboard', ['user'=>$user]);
    }
    public function indexadmindashboard(Request $request)
    {
        $user = session()->get('user');
        // dd($user);
        // Mengirimkan data pengguna ke halaman edit profile
        return view('admindashboard', ['user'=>$user]);
    }
    public function editPassword(Request $request)
    {
    $user = session()->get('user');
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
    if ($request->password_lama == $user->password) {
        if ($request->konfirmasi_password == $request->password_baru){
        // Jika password lama sesuai, hash password baru menggunakan Bcrypt
        $user->password = $request->password_baru;
        $user->save();
        session()->flush();
        return view('/login1')->with('success', 'Password berhasil diubah.');
        }
    } else {
        // Jika password lama tidak sesuai, kembalikan dengan pesan error
        return redirect('/editprofile')->with('error', 'Password lama tidak sesuai.');
    }
    }
    public function updaterow(Request $request, $npm)
    {
    $user = User::where('npm', $npm)->firstOrFail();

    $user->nama = $request->nama;
    $user->username = $request->username;
    $user->password = $request->password;

    $user->save();

    return response()->json([
        'message' => 'User updated successfully'
    ]);
    }
    public function deleteUser($npm)
    {
    try {
        // Find the user by NPM and delete
        User::where('npm', $npm)->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Failed to delete user',
            'message' => $e->getMessage(),
        ], 500);
    }
    }
    public function addUser(Request $request)
    {
        $validatedData = [
            'npm' => request('npm'),
            'nama' => request('nama'),
            'username' => request('username'),
            'password' => request('password'),
            'role' => false,
        ];
            User::create($validatedData);
    
        return redirect()->back()->with('success', 'User berhasil ditambahkan');
    }


}
