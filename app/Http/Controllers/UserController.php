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



    public function profile(Request $request)
    {
        $a = $request->user()->hasRole('developer');

        return $a ? 'có' : 'không';
        return response()->json($request->user()->with('permissions', 'roles')->get());
    }
}
