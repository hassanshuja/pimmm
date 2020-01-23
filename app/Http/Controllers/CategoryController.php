<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use App\Currency;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create()
    {
        $categories=Category::where('parent_id',null)->get();


        return view('category.create',compact('categories'));
    }
    public function index()
    {

        $categories=Category::all();


        return view('category.index',compact('categories'));
    }

    public function store(Request $request)
    {
        request()->validate([

            'name' => 'required|unique:categories'

        ]);
        $category= new Category();
        $category->name=$request->input('name');
        if ($request->input('sub')!=null)
        {
            $category->parent_id=$request->input('parent');

        }


        $category->save();
        return redirect()
            ->route("category.index")
            ->with("success", "category created successfully ");

    }
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();

        return redirect()
            ->route("category.index")
            ->with("success", "category deleted successfully");
    }

    public function edit($id)

    {

        $category=Category::find($id);
        $categories=Category::where('parent_id',null)->get();

        return view('category.edit',compact('categories','category'));


    }

    public function update(Request $request,$id)

    {
        $category=Category::find($id);

        if ($category->name!=$request->input('name')) {
            request()->validate([

                'name' => 'required|unique:categories'
            ]);
        }

        $category->name=$request->input('name');
        if ($request->input('sub')!=null)
        {
            $category->parent_id=$request->input('parent');

        }
        else
        {
            $category->parent_id=null;

        }


        $category->save();







        $category->save();
        return redirect()
            ->route("category.index")
            ->with("success", "category updated successfully");


    }







}
