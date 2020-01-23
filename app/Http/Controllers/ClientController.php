<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Client;
use App\Galleries;
use App\Pages;
use App\Press;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Menu;
use App\Branch;

class ClientController extends Controller
{
    //


    public function create()
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        return view('client.create');
    }


    public function index()
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customers=Client::all();



        return view('client.index',compact('customers'));
    }

        public function store(Request $request)
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');

        $customer= new Client();
        $customer->name=$request->input('name');
        $customer->name_arabic=$request->input('name_arabic');
        $customer->number=$request->input('number');



        $customer->save();
        return redirect()
            ->route("client.index")
            ->with("success", "client created successfully ");

    }



    public function destroy($id)
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $page=Client::find($id);
        $page->delete();

        return redirect()
            ->route("client.index")
            ->with("success", "client deleted successfully");
    }


    public function edit($id)

    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer=Client::find($id);

        return view('client.edit',compact('customer'));


    }



    public function update(Request $request,$id)

    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer=Client::find($id);

        $customer->name=$request->input('name');
        $customer->name_arabic=$request->input('name_arabic');
        $customer->number=$request->input('number');



        $customer->save();
        return redirect()
            ->route("client.index")
            ->with("success", "client updated successfully");


    }

}
