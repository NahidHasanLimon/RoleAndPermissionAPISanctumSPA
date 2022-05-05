<?php

namespace App\Http\Controllers\API;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Module;

class UserController extends Controller
{
    /**
     * Register
     */
    public function index(Request $request)
    { 
        $users = User::paginate(10);
        return response()->json(
            [
            'success' => true,
            'users' => $users,
            ]
        );


    }
    public function show(Request $request)
    { 
        // return ($request->id);
        $user = User::find($request->id);
        return response()->json(
            [
            'success' => true,
            'user' => $user,
            ]
        );

    }
    public function store_permission(Request $request)
    {
        $user = User::find($request->user_id);
        $user->permissions = $request->permissions;
        $user->save();
        return response()->json(
                [
                'success' => true,
                'user' => $user,
                ]
        );

    }
}