<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function create()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        return view('user.create');
    }
    public function log(){
        session_destroy();
        return redirect('/login');
    }
    public function index()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $users=User::all();
        return view('user.index',compact('users'));
    }

    public function profile(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = User::find(Auth::id());
            if (Auth::user()->email != $request->input('email')) {
                request()->validate([

                    'email' => 'required|unique:users'
                ]);
            }


            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('validation-password'));
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');

            $user->save();
            return redirect()
                ->route("profile")
                ->with("success", "profile info updated successfully");
        }
        return view('profile');
    }
    public function store(Request $request)
    {

        request()->validate([

            'email' => 'required|unique:users'
        ]);
        $admin= new User();
        $admin->name=$request->input('first_name');


        $admin->email=$request->input('email');
        $admin->password=$request->input('validation-password');

        $admin->save();
        return redirect()
            ->route("admins.index")
            ->with("success", "admin created successfully");

    }


    public function edit($id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $user=User::find($id);

        return view('user.edit',compact('user'));


    }

    public function update(Request $request,$id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $user=User::find($id);

        if ($user->email!=$request->input('email')) {
            request()->validate([

                'email' => 'required|unique:users'
            ]);
        }

        $user->name=$request->input('first_name');


        $user->email=$request->input('email');
        if ($request->input('password')!=null) {
            $user->password = $request->input('password');
        }

        $user->save();
        return redirect()
            ->route("admins.index")
            ->with("success", "admin updated successfully");


    }
    public function destroy($id)
    {
        $user=User::find($id);

        $user->delete();

        return redirect()
            ->route("admins.index")
            ->with("success", "admin deleted successfully");
    }
}
