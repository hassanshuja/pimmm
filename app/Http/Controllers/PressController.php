<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Galleries;
use App\Pages;
use App\Press;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Menu;
use App\Branch;

class PressController extends Controller
{
    //


    public function create()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');

        return view('press.create');
    }


    public function index()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customers=Press::all();



        return view('press.index',compact('customers'));
    }

        public function store(Request $request)
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');

        $customer= new Press();
        $customer->title=$request->input('title');
        $customer->title_arabic=$request->input('title_arabic');
        $customer->url=$request->input('url');
        $customer->description=$request->input('description');
        $customer->description_arabic=$request->input('description_arabic');
        if ($request->file('image') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image')->hashName());


            $request->file('image')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->image = $date .'.'. $ext[1];


        }


        $customer->save();
        return redirect()
            ->route("press.index")
            ->with("success", "press created successfully ");

    }



    public function destroy($id)
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $page=Press::find($id);
        $page->delete();

        return redirect()
            ->route("press.index")
            ->with("success", "press deleted successfully");
    }


    public function edit($id)

    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer=Press::find($id);

        return view('press.edit',compact('customer'));


    }



    public function update(Request $request,$id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer=Press::find($id);

        $customer->title=$request->input('title');
        $customer->title_arabic=$request->input('title_arabic');
        $customer->description=$request->input('description');
        $customer->url=$request->input('url');

        $customer->description_arabic=$request->input('description_arabic');
        if ($request->file('image') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image')->hashName());


            $request->file('image')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->image = $date .'.'. $ext[1];


        }



        $customer->save();
        return redirect()
            ->route("press.index")
            ->with("success", "press updated successfully");


    }

}
