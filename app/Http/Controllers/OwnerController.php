<?php

namespace App\Http\Controllers;

use App\Office;
use App\Owner;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    //
    public function create()
    {
        if (isset($_SESSION['id'])) {

            $offices = Office::all();
            return view('owner.create', compact('offices'));
        } else {
            return redirect('/login');
        }
    }

    public function index()
    {
        if (isset($_SESSION['id'])) {

            $owners = Owner::all();
            return view('owner.index', compact('owners'));
        } else {
            return redirect('/login');
        }
    }

    public function store(Request $request)
    {
        if (isset($_SESSION['id'])) {

            request()->validate([
                'email' => 'required|unique:owners',
            ]);

            $admin = new User();
            $admin->company_name = $request->input('company_name');
            // $admin->first_name = $request->input('first_name');
            // $admin->last_name = $request->input('last_name');
            $admin->email = $request->input('email');
            $admin->phone = $request->input('phone');
            $admin->usertype = '3';

            $admin->password = Hash::make($request->input('validation-password'));
//        $admin->office_id=$request->input('office');
            if ($request->input('notes')) {
                $admin->notes = $request->input('notes');
            }
            $admin->created_by = $_SESSION['id'];
            $admin->save();
            return redirect('/ownerPlants')
                ->with("success", "Owner created successfully");
        } else {
            return redirect('/login');
        }
    }

    public function edit($id)
    {
        if (isset($_SESSION['id'])) {

            $owner = Owner::find($id);

            return view('owner.edit', compact('owner'));
        } else {
            return redirect('/login');
        }

    }

    public function update(Request $request, $id)
    {
        if (isset($_SESSION['id'])) {

            $owner = Owner::find($id);

            if ($owner->email != $request->input('email')) {
                request()->validate([

                    'email' => 'required|unique:owners',
                ]);
            }

            $owner->first_name = $request->input('first_name');
            $owner->last_name = $request->input('last_name');
            $owner->email = $request->input('email');
            $owner->phone = $request->input('phone');

            $owner->updated_by = $_SESSION['id'];

            if ($request->input('password') != null) {
                $owner->password = Hash::make($request->input('password'));
            }

            $owner->save();
            return redirect('/ownerPlants')
                ->with("success", "owner updated successfully");
        } else {
            return redirect('/login');
        }

    }
    public function destroy($id)
    {
        if (isset($_SESSION['id'])) {

            $owner = User::find($id);

            $owner->delete();

            return redirect()->back()
                ->with("success", "owner deleted successfully");
        } else {
            return redirect('/login');
        }
    }
}