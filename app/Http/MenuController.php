<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Galleries;
use App\Pages;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MenuController extends Controller
{
    //


    public function create()
    {

        return view('menu.create');
    }


    public function index()
    {

        $customers=Pages::all();


        return view('menu.index',compact('customers'));
    }

        public function store(Request $request)
    {
        request()->validate([

            'name' => 'required|unique:pages',
            'name_arabic' => 'required|unique:pages'

        ]);
        $customer= new Pages();
        $customer->name=$request->input('name');
        $customer->name_arabic=$request->input('name_arabic');
        $customer->title=$request->input('title');
        $customer->title_arabic=$request->input('title_arabic');

        if ($request->file('background') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('background')->hashName());


            $request->file('background')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->background = $date .'.'. $ext[1];


        }

        if ($request->file('image_one') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_one')->hashName());


            $request->file('image_one')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->image_one = $date .'.'. $ext[1];


        }
        if ($request->file('image_two') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_two')->hashName());


            $request->file('image_two')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->image_two = $date .'.'. $ext[1];


        }
        if ($request->file('image_three') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_three')->hashName());


            $request->file('image_three')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->image_three = $date .'.'. $ext[1];


        }

        $customer->save();
        return redirect()
            ->route("page.index")
            ->with("success", "page created successfully ");

    }



    public function destroy($id)
    {
        $page=Pages::find($id);
        $page->delete();

        return redirect()
            ->route("menu.index")
            ->with("success", "menu deleted successfully");
    }


    public function edit($id)

    {

        $customer=Pages::find($id);

        return view('menu.edit',compact('customer'));


    }





    public function update(Request $request,$id)

    {
        $customer=Pages::find($id);

        if ($customer->name!=$request->input('name')) {
            request()->validate([

                'name' => 'required|unique:pages'
            ]);
        }
        if ($customer->name_arabic!=$request->input('name_arabic')) {
            request()->validate([

                'name_arabic' => 'required|unique:pages'
            ]);
        }

        $customer->name = $request->input('name');
        $customer->name_arabic=$request->input('name_arabic');
        $customer->title=$request->input('title');
        $customer->title_arabic=$request->input('title_arabic');

        if ($request->file('backgrounds') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('backgrounds')->hashName());


            $request->file('backgrounds')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->background = $date .'.'. $ext[1];


        }

        if ($request->file('image_one') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_one')->hashName());


            $request->file('image_one')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->image_one = $date .'.'. $ext[1];


        }
        if ($request->file('image_two') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_two')->hashName());


            $request->file('image_two')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->image_two = $date .'.'. $ext[1];


        }
        if ($request->file('image_three') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_three')->hashName());


            $request->file('image_three')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->image_three = $date .'.'. $ext[1];


        }

        $customer->save();
        return redirect()
            ->route("menu.index")
            ->with("success", "menu updated successfully");


    }

}
