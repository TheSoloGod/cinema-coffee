<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    public function test(Request $request) {
        $user = $request->user;
        $token = $request->token;
        $testUser = new User();
        $testUser->name = $user;
        $testUser->email = $token;
        $testUser->password = '12345';
        $testUser->save();
//
//        $data = [
//            'user' => $user,
//            'token' => $token
//        ];
//        return response()->json($data, 200);
    }
}
