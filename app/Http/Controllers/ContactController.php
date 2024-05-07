<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    private $recipientEmail = 'info@spoider.in';

    public function EnquiryForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'dzName' => 'required',
            'dzEmail' => 'required|email',
            'dzMessage' => 'required',
        ]);

        $type = 1;

        // Send email
        Mail::to($this->recipientEmail)->send(new ContactMail($request->all(), $type));

        // You can add a success message or redirect the user to a thank you page
        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }

    public function SubmitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'dzName' => 'required',
            'dzEmail' => 'required|email',
            'dzMessage' => 'required',
            'dzphone' => 'required',
        ]);

        $type = 2;

        // Send email
        Mail::to($this->recipientEmail)->send(new ContactMail($request->all(), $type));

        // You can add a success message or redirect the user to a thank you page
        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }
}
