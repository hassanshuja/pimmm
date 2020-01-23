<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Contact;
use App\Galleries;
use App\Pages;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Menu;
use App\Branch;
use App\Mail\BookingShipped;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //

    public function contact_us(Request $request)
    {
        $objDemo = new \stdClass();
        $objDemo->title = 'new request';
        $objDemo->name =$request->input('name');
        $objDemo->email = $request->input('email');
        $objDemo->mobile = $request->input('mobile');
        $objDemo->subject = $request->input('subject');
        $objDemo->request = $request->input('request');
        $user=Contact::first();

        try {
            Mail::to($user->email)->queue(new BookingShipped($objDemo));
        } catch (\Exception $e) {
        }
        return redirect('contact_us')
            ->with("success", "request sent successfully");
    }

    public function contact_us_ar(Request $request)
    {
        $objDemo = new \stdClass();
        $objDemo->title = 'new request';
        $objDemo->name =$request->input('name');
        $objDemo->email = $request->input('email');
        $objDemo->mobile = $request->input('mobile');
        $objDemo->subject = $request->input('subject');
        $objDemo->request = $request->input('request');
        $user=Contact::first();

        try {
            Mail::to($user->email)->queue(new BookingShipped($objDemo));
        } catch (\Exception $e) {
        }
        return redirect('contact_us_ar')
            ->with("success", "request sent successfully");
    }



    public function index()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $user=Contact::first();
        return view('email',compact('user'));
    }



    public function update(Request $request)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');

        $user=Contact::first();



        $user->email=$request->input('email');


        $user->save();
        return redirect()
            ->route("email")
            ->with("success", "contact us email updated successfully");


    }

}
