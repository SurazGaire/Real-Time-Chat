<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatEvent;


class ChatController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function chat()
    {
        return view('chat');
    }
    public function send(request $request){
        return $request->all();
        
        $user=User::find(Auth::id());
        event(new ChatEvent($request->message,$user));
    }
}
