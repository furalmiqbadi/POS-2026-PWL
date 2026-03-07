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
        $user = UserModel::create([
            'username' => 'manager55',
            'nama' => 'Manager55',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';
        $user->save();

        $user->wasChanged(); // true
        $user->wasChanged('username'); // true
        $user->wasChanged(['username', 'level_id']); // true
        $user->wasChanged('nama'); // false
        
        dd($user->wasChanged(['nama', 'username'])); // true

        // $user->username = 'manager56';

        // $user->isDirty(); // true
        // $user->isDirty('username'); // true
        // $user->isDirty('nama'); // false
        // $user->isDirty(['nama', 'username']); // true

        // $user->isClean(); // false
        // $user->isClean('username'); // false
        // $user->isClean('nama'); // true
        // $user->isClean(['nama', 'username']); // false

        // $user->save();

        // $user->isDirty(); // false
        // $user->isClean(); // true

        // dd($user->isDirty()); 




        // $user = UserModel::firstOrNew(
        //         [
        //             'username' => 'manager33',
        //             'nama' => 'Manager Tiga Tiga',
        //             'password' => Hash::make('12345'),
        //             'level_id' => 2
        //         ],
        //     );
        //     $user->save(); 
        //     return view('user', ['data' => $user]);


        // $user = UserModel::where('level_id', 2)->count();
        // return view('user', ['data' => $user]);

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