<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/18/2019
 * Time: 2:11 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SupperViserController extends Controller
{
    public function create()
    {
        if(isset($_SESSION['id'])){

        return view('supervisor.create');
        }else{
            return redirect('/login');
        }
    }

    public function index()
    {
        if(isset($_SESSION['id'])){

        $supervisors=User::where('usertype','=','2')->get();
        return view('supervisor.index',compact('supervisors'));
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
        $supervisor= new User();
        $supervisor->first_name=$request->input('first_name');
        $supervisor->last_name=$request->input('last_name');

        $supervisor->usertype=2;
        $supervisor->email=$request->input('email');
        $supervisor->password = Hash::make($request->input('validation-password'));
        $supervisor->phone=$request->input('phone');

        $supervisor->save();
        return redirect()
            ->route("supervisor.index")
            ->with("success", "Supervisor created successfully");
        }else{
            return redirect('/login');
        }
    }


    public function edit($id)

    {
        if(isset($_SESSION['id'])){

        $supervisor=User::find($id);

        return view('supervisor.edit',compact('supervisor'));

        }else{
            return redirect('/login');
        }
    }

    public function update(Request $request,$id)

    {
        if(isset($_SESSION['id'])){

        $supervisor=User::find($id);

        if ($supervisor->email!=$request->input('email')) {
            request()->validate([

                'email' => 'required|unique:users'
            ]);
        }

        $supervisor->first_name=$request->input('first_name');


        $supervisor->email=$request->input('email');
        $supervisor->last_name=$request->input('last_name');


        $supervisor->phone=$request->input('phone');
        if ($request->input('password')!=null) {
            $supervisor->password = Hash::make($request->input('password'));
        }

        $supervisor->save();
        return redirect()
            ->route("supervisor.index")
            ->with("success", "Supervisor updated successfully");

        }else{
            return redirect('/login');
        }
    }
    public function destroy($id)
    {
        if(isset($_SESSION['id'])){

            $supervisor=User::find($id);

        $supervisor->delete();

        return redirect()
            ->route("supervisor.index")
            ->with("success", "Supervisor deleted successfully");
        }else{
            return redirect('/login');
        }
    }
}