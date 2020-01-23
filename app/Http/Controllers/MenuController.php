<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Galleries;
use App\Menu;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MenuController extends Controller
{
    //


    public function create()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');

        return view('menu.create');
    }


    public function index()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customers=Menu::all();


        return view('menu.index',compact('customers'));
    }

        public function store(Request $request)
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        request()->validate([

            'name' => 'required|unique:menus',
            'name_arabic' => 'required|unique:menus'

        ]);
        $customer= new Menu();
        $customer->name=$request->input('name');
        $customer->name_arabic=$request->input('name_arabic');
        $customer->type=$request->input('type');

        if ($request->file('image') != null && $customer->type==2) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image')->hashName());


            $request->file('image')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->photo = $date .'.'. $ext[1];


        }



        $customer->save();
        return redirect()
            ->route("menu.index")
            ->with("success", "menu created successfully ");

    }



    public function destroy($id)
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $page=Menu::find($id);
        $page->delete();

        return redirect()
            ->route("menu.index")
            ->with("success", "menu deleted successfully");
    }


    public function edit($id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');

        $customer=Menu::find($id);

        return view('menu.edit',compact('customer'));


    }





    public function update(Request $request,$id)

    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer=Menu::find($id);

        if ($customer->name!=$request->input('name')) {
            request()->validate([

                'name' => 'required|unique:menus'
            ]);
        }
        if ($customer->name_arabic!=$request->input('name_arabic')) {
            request()->validate([

                'name_arabic' => 'required|unique:menus'
            ]);
        }

        $customer->name=$request->input('name');
        $customer->name_arabic=$request->input('name_arabic');
        $customer->type=$request->input('type');

        if ($request->file('image') != null && $customer->type==2) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image')->hashName());


            $request->file('image')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $customer->photo = $date .'.'. $ext[1];


        }
        if ($customer->type==1)
            $customer->photo=null;

        $customer->save();
        return redirect()
            ->route("menu.index")
            ->with("success", "menu updated successfully");


    }

}
