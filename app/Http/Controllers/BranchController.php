<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Branch;
use App\Menu;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BranchController extends Controller
{
    //


    public function create()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customers=Menu::where('type',2)->get();


        return view('branch.create',compact('customers'));
    }


    public function index()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customers=Branch::all();


        return view('branch.index',compact('customers'));
    }

        public function store(Request $request)
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        request()->validate([

            'name' => 'required|unique:branch',
            'name_arabic' => 'required|unique:branch'

        ]);
        $customer= new Branch();
        $customer->name=$request->input('name');
        $customer->name_arabic=$request->input('name_arabic');
        $customer->menu_id=$request->input('menu');





        $customer->save();
        return redirect()
            ->route("branch.index")
            ->with("success", "branch created successfully ");

    }



    public function destroy($id)
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $page=Branch::find($id);
        $page->delete();

        return redirect()
            ->route("branch.index")
            ->with("success", "branch deleted successfully");
    }


    public function edit($id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customers=Menu::where('type',2)->get();


        $customer=Branch::find($id);

        return view('branch.edit',compact('customer','customers'));


    }





    public function update(Request $request,$id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer=Branch::find($id);

        if ($customer->name!=$request->input('name')) {
            request()->validate([

                'name' => 'required|unique:branch'
            ]);
        }
        if ($customer->name_arabic!=$request->input('name_arabic')) {
            request()->validate([

                'name_arabic' => 'required|unique:branch'
            ]);
        }

        $customer->name=$request->input('name');
        $customer->name_arabic=$request->input('name_arabic');
        $customer->menu_id=$request->input('menu');



        $customer->save();
        return redirect()
            ->route("branch.index")
            ->with("success", "branch updated successfully");


    }

}
