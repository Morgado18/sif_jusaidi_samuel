<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Auth;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::where('to_user_id', Auth::id())->get();
        return view('messages.index', compact('messages'));
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show', compact('message'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'to_user_id' => 'required|integer|exists:users,id',
        ]);

        $message = new Message;
        $message->from_user_id = Auth::id();
        $message->to_user_id = $request->to_user_id;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('messages.index')->with('success', 'Message sent successfully!');
    }
}
