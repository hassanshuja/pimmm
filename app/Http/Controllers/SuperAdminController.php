<?php

namespace App\Http\Controllers;

use App\RogParts;
use App\User;
use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{

    //maged work
    public function viewAllUsers()
    {
        if(isset($_SESSION['id'])) {
            $users = User::all();
            $owners = Owner::all();
            return view('users.view')->with('users', $users)->with('owners', $owners);
        }else{
            return redirect('/login');
        }
    }
    public function updateUserType(Request $request,$id)
    {
        $user=User::find($id);
        if ($user){
            $user->usertype=$request->input('user');
            $user->save();
            return 1;
        }else{
            return 2;
        }

    }
    //
    public function create()
    {
        if(isset($_SESSION['id'])){

        return view('user.create2');
        }else{
            return redirect('/login');
        }
    }

    public function index()
    {
        if(isset($_SESSION['id'])){

        $users=User::where('usertype',1)->get();
        return view('user.index',compact('users'));
        }else{
            return redirect('/login');
        }
    }

    public function profile(Request $request)
    {
        if(isset($_SESSION['id'])){

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
                $admin= new User();
                $admin->first_name=$request->input('first_name');
                $admin->last_name=$request->input('last_name');
                $admin->usertype=$request->type;
                $admin->email=$request->input('email');
                $admin->password = Hash::make($request->input('validation-password'));
                $admin->phone=$request->input('phone');
                $admin->save();

                return redirect('/usersList')
                    ->with("success", "admin created successfully");


        }else{
            return redirect('/login');
        }
    }


    public function edit($id)

    {
        if(isset($_SESSION['id'])){

        $user=User::find($id);

        return view('user.edit',compact('user'));
        }else{
            return redirect('/login');
        }

    }

    public function update(Request $request,$id)

    {
        if(isset($_SESSION['id'])){

        $user=User::find($id);

        if ($user->email!=$request->input('email')) {
            request()->validate([

                'email' => 'required|unique:users'
            ]);
        }

        $user->first_name=$request->input('first_name');


        $user->email=$request->input('email');
        $user->last_name=$request->input('last_name');


        $user->phone=$request->input('phone');
        if ($request->input('password')!=null) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();
            return redirect('/usersList')
            ->with("success", "admin updated successfully");
        }else{
            return redirect('/login');
        }

    }
    public function destroy($id)
    {
        if(isset($_SESSION['id'])){

            $user=User::find($id);

        $user->delete();

            return redirect('/usersList')
            ->with("success", "admin deleted successfully");
        }else{
    return redirect('/login');
    }
    }
}
