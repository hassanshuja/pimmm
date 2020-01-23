<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/18/2019
 * Time: 2:46 PM
 */

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class StuffController extends Controller
{
    public function create()
    {
        if(isset($_SESSION['id'])){

        return view('stuff.create');
        }else{
            return redirect('/login');
        }
    }

    public function index()
    {
        if(isset($_SESSION['id'])){

        $stuffs=User::where('usertype','=','3')->get();
        return view('stuff.index',compact('stuffs'));
        }else{
            return redirect('/login');
        }
    }


    public function store(Request $request)
    {
        if(isset($_SESSION['id'])){

        request()->validate([

            'email' => 'required|unique:users'
        ]);
        $stuff= new User();
        $stuff->first_name=$request->input('first_name');
        $stuff->last_name=$request->input('last_name');

        $stuff->usertype=3;
        $stuff->email=$request->input('email');
        $stuff->password = Hash::make($request->input('validation-password'));
        $stuff->phone=$request->input('phone');

        $stuff->save();
        return redirect()
            ->route("stuff.index")
            ->with("success", "Stuff created successfully");
        }else{
            return redirect('/login');
        }
    }


    public function edit($id)

    {
        if(isset($_SESSION['id'])){

        $stuff=User::find($id);

        return view('stuff.edit',compact('stuff'));
        }else{
            return redirect('/login');
        }

    }

    public function update(Request $request,$id)

    {
        if(isset($_SESSION['id'])){

        $stuff=User::find($id);

        if ($stuff->email!=$request->input('email')) {
            request()->validate([

                'email' => 'required|unique:users'
            ]);
        }

        $stuff->first_name=$request->input('first_name');


        $stuff->email=$request->input('email');
        $stuff->last_name=$request->input('last_name');


        $stuff->phone=$request->input('phone');
        if ($request->input('password')!=null) {
            $stuff->password = Hash::make($request->input('password'));
        }

        $stuff->save();
        return redirect()
            ->route("stuff.index")
            ->with("success", "Stuff updated successfully");

        }else{
            return redirect('/login');
        }
    }
    public function destroy($id)
    {
        if(isset($_SESSION['id'])){

            $stuff=User::find($id);

        $stuff->delete();

        return redirect()
            ->route("stuff.index")
            ->with("success", "Stuff deleted successfully");
        }else{
            return redirect('/login');
        }
    }
}