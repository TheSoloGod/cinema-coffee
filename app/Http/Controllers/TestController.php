<?php

namespace App\Http\Controllers;

use ExponentPhpSDK\Expo;
use Illuminate\Contracts\View\View;
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

        $data = [
            'user' => $user,
            'token' => $token
        ];
        return response()->json($data, 200);
    }

    public function send(Request $request) {
        $channelName = 'news';
        $recipient= User::find(1)->email;

        // You can quickly bootup an expo instance
        $expo = Expo::normalSetup();

        // Subscribe the recipient to the server
        $expo->subscribe($channelName, $recipient);

        // Build the notification data
        $notification = ['body' => 'Hello World!'];

        // Notify an interest with a notification
        $expo->notify($channelName, $notification);
    }

    public function index() {
        return view('test');
    }
}
