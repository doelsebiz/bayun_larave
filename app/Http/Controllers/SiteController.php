<?php

namespace App\Http\Controllers;

use App\Helpers\Cmf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Session;
use Validator;
use Storage;
use Input;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.homepage.index');
    }
    public function sendquote(Request $request)
    {
        Mail::send('email.quoteemail', ['request' => $request], function ($message) use ($request) {
            $message->to('anamdumitriu@gmail.com');
            $message->subject($request->subject);
        });
        return redirect()->back()->with('message', 'Your Qoute Submited Successfully. Our Team Will Contact You With in 24 Hours');
    }
}
