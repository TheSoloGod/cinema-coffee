<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request) {
        $user = $request->user;
        $token = $request->token;
        $data = [
            'user' => $user,
            'token' => $token
        ];
        return response()->json($data, 200);
    }
}
