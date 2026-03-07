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

        $user = UserModel::where('username', 'manager')->firstOrFail();
        return view('user', ['data' => $user]);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // // 1. Siapkan data yang akan diupdate
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];

        // // 2. Update data user berdasarkan username menggunakan Eloquent
        // UserModel::where('username', 'customer-1')->update($data);

        // // 3. Ambil semua data terbaru untuk ditampilkan ke view
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

    }
}