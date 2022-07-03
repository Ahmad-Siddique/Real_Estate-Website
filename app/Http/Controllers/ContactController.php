<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $email = $request->input('email');
        $message = $request->input('message');

        DB::unprepared("insert into contact (email, message ) values ('$email','$message')");
        return redirect('/contactus');
    }
}
