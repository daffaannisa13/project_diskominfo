<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bidang; // Tambahkan import model Bidang
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Display a listing of the users
    public function index()
    {
        $users = User::with('bidang')->get(); // Ambil pengguna dengan relasi bidang
        return view('users.index', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        $bidangs = Bidang::all(); // Ambil semua bidang untuk combo box
        return view('users.create', compact('bidangs'));
    }

    // Store a newly created user in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'bidang_id' => 'nullable|exists:bidang,id', // Validasi untuk bidang_id
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'bidang_id' => $request->bidang_id, // Simpan bidang_id
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Display the specified user
    public function show($id)
    {
        $user = User::with('bidang')->findOrFail($id); // Ambil pengguna dengan relasi bidang
        return response()->json($user);
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $bidangs = Bidang::all(); // Ambil semua bidang untuk combo box
        return view('users.edit', compact('user', 'bidangs'));
    }

    // Update the specified user in storage
    public function update(Request $request, $id)
    {
       $request->validate([
    'name' => 'required|string|max:255',
    'username' => 'required|string|max:255|unique:users,username,' . $id,
    'bidang_id' => 'required|exists:bidang,id',
    'password' => 'nullable|string|min:8|confirmed', // Validasi konfirmasi password
]);


        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->bidang_id = $request->bidang_id; // Update bidang

        // Check if a new password is provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Encrypt the new password
        }

        $user->save(); // Save the changes

        return redirect()->route('users.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    // Remove the specified user from storage
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
