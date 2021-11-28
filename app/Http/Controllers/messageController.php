<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\message;

class messageController extends Controller
{
    public function store(Request $request){
        
        $message = new message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();

        return redirect()->back()->with('success','test');
    }
}
