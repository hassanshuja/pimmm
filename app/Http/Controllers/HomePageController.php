<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Galleries;
use App\Pages;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Menu;
use App\Branch;

class HomePageController extends Controller
{
    //

    public function mega(Request $request)
    {
        $branches=Branch::where('menu_id',$request->input('mega'))->get();
        return $branches;


    }
    public function create()
    {
        $megas=Menu::where('type',2)->get();
        $normals=Menu::where('type',1)->get();

        return view('homepages.create',compact('megas','normals'));
    }


    public function index()
    {

        $customers=Pages::where('home',1)->get();


        return view('homepages.index',compact('customers'));
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

        $customer->description=$request->input('description');
        $customer->description_arabic=$request->input('description_arabic');
        $customer->home=1;

        if ($request->file('home') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('home')->hashName());


            $request->file('home')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->home_image = $date .'.'. $ext[1];


        }
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
            ->route("homepage.index")
            ->with("success", "page created successfully ");

    }



    public function destroy($id)
    {
        $page=Pages::find($id);
        $page->delete();

        return redirect()
            ->route("homepage.index")
            ->with("success", "page deleted successfully");
    }


    public function edit($id)

    {


        $customer=Pages::find($id);

        return view('homepages.edit',compact('customer'));


    }

    public function show($id)

    {

        $page=Pages::find($id);
        $menus=Menu::all();
        $pages=Pages::where('menu_id',null)->where('branch_id',null)->get();

        return view('front.page',compact('pages','page','menus'));


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
        $customer->description=$request->input('description');
        $customer->description_arabic=$request->input('description_arabic');
        $customer->home=1;

        if ($request->file('home') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('home')->hashName());


            $request->file('home')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->home_image = $date .'.'. $ext[1];


        }

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
            ->route("homepage.index")
            ->with("success", "page updated successfully");


    }

}
