<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'current' => auth()->user()->hasRole('super_admin'),
            'data' => User::all()
        ]);
    }



    public function profile()
    {
        return json_encode(auth()->user()->hasRole('super_admin'));
    }
}
