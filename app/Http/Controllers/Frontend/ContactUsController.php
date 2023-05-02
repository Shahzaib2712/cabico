<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact_us;

class ContactUsController extends Controller
{
    public function user(){
        return view('frontend.index');
    }
    function DataInsert(Request $request){

        $user_name = $request->input('user_name');
        $user_contact = $request->input('user_contact');
        $user_email = $request->input('user_email');
        $user_date = $request->input('user_date');
        $user_message = $request->input('user_message');

        $isInsertSuccess = contact_us::insert(['user_name' => $user_name, 'user_contact' => $user_contact,
         'user_email' => $user_email, 'user_date' => $user_date, 'user_message' => $user_message]);
        if($isInsertSuccess) echo '<h2> Thank you</h2>';
        else echo '<h2>Insert Failed</h2>';
    }
}
