<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function Messages()
    {

        $messages = DB::select('select * from contact_us');

        return view('DashboardView.messages', compact('messages'));

    }

    public function DeleteMessages($id){


        $messages = Db::select('select * from contact_us where user_id = ?',[$id]);

        if($messages != null){

            Db::delete('delete from contact_us where user_id = ?',[$id]);

        return redirect('/messages');

        }

        return redirect('/messages');


    }
}
