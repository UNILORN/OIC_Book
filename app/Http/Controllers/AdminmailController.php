<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\ORDER;
use Illuminate\Http\Request;
use Mail; // 追加
use App\Mail\Mailsend; // 追加

class AdminmailController extends BaseController
{

    public function index()
    {
        return view('administer/mail/admin_mail');
    }

    public function send(Request $request)
    {
        Mail::to($request->email)->send(new Mailsend($request));

        return view('administer.mail.admin_mailsend');
    }

}