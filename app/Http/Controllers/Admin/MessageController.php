<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function fetchMessages()
    {
        return Message::with('admin')->get();
    }
    public function sendMessage(Request $request)
    {
        $message = auth()->user()->messages()->create(['message' => $request->message]);
        broadcast(new MessageSent(auth()->user(), $message->load('admin')))->toOthers();

        return response(['status' => 'Message sent successfully', 'message' => $message]);
    }
}
