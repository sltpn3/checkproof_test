<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $items = User::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $item = User::create($request->all());
        return response()->json($item, 201);
    }
}
