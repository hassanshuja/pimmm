<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/17/2019
 * Time: 10:53 PM
 */

namespace App\Http\Controllers;

use App\User;
use App\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function add()
    {
        $users=User::where('usertype','=','1')->get();
        return view('office.create')->with('users',$users);
    }
    public function store(Request $request)
    {
        $office=new Office();
        $office->name=$request->name;
        $office->supervisor_id=$request->user;
        $office->save();
        return redirect('/office');
    }
    public function get()
    {
        $offices=Office::all();
        return view('office.index')->with('offices',$offices);
    }
    public function edit($id)
    {
        $office=Office::find($id);
        $users=User::where('usertype','=','1')->get();
        return view('office.update')->with('office',$office)->with('users',$users);
    }
    public function update(Request $request,$id)
    {
        $office=Office::find($id);
        $office->name=$request->name;
        $office->supervisor_id=$request->user;
        $office->save();
        return redirect('/office');
    }
    public function delete($id)
    {
        $office=Office::find($id);
        $office->delete();
        return redirect()->back();

    }
}