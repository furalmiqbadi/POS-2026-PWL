<?php

namespace App\Http\Controllers;

use App\Models\UserModel; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // // tambah data user dengan Eloquent Model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data); // tambahkan data ke tabel m_user

        // // coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

        // 1. Siapkan data yang akan diupdate
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];

        // 2. Update data user berdasarkan username menggunakan Eloquent
        UserModel::where('username', 'customer-1')->update($data);

        // 3. Ambil semua data terbaru untuk ditampilkan ke view
        $user = UserModel::all();
        return view('user', ['data' => $user]);

    }
}