<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Events\PrivateMessageSent;
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

    public function privateMessages(Admin $user)
    {
        $privateCommunication = Message::with('admin')
            ->where(['admin_id' => auth()->id(), 'receiver_id' => $user->id])
            ->orWhere(function ($query) use ($user) {
                $query->where(['admin_id' => $user->id, 'receiver_id' => auth()->id()]);
            })
            ->get();
        return $privateCommunication;
    }

    public function sendPrivateMessage(Request $request, Admin $user)
    {
        $input = $request->all();
        $input['receiver_id'] = $user->id;
        $message = auth()->user()->messages()->create($input);
        broadcast(new PrivateMessageSent($message->load('admin')))->toOthers();

        return response(['status' => 'Message private sent successfully', 'message' => $message]);
    }
}
