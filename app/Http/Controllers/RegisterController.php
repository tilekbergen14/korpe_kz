<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view("register");
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'password' => 'required|confirmed',
            'securityword' => 'required|max:255|in:marat',
        ]);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'securityword' => $request->securityword,
        ]);
        if (!auth()->attempt($request->only("name", 'password'), $request->remember)) {
            return back()->with("status", "Invalid credentials!");
        }
        return redirect()->route("admin");
    }
}
