<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailsController extends Controller
{
    public function sendEmailReminder(Request $request)
    {
        $user = 'Brian Mwathi';

        Mail::send('emails.mail', ['user' => $user], function ($m) use ($user) {
            $m->from('thePips11@thePips.com', 'thePips');

            $m->to("mwathibrian7@gmail.com")->subject('Your Reminder!');
        });
    }
}