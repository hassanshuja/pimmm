<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/19/2019
 * Time: 4:50 PM
 */

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use App\Plants;
class PlantsController extends Controller
{
    public function create($id)
    {
        if(isset($_SESSION['id'])){

            return view('plant.create')->with('id',$id);
        }else{
            return redirect('/login');
        }
    }

    public function index($id)
    {
        if(isset($_SESSION['id'])){

        $plants=Plants::where('owner_id','=',$id)->get();
        return view('plant.index',compact('plants'));
        }else{
            return redirect('/login');
        }
    }


    public function store(Request $request)
    {
        if(isset($_SESSION['id'])){
    $validatedData = $request->validate([
            'plant_owner' => 'required',
        ]);
        
        $validator = Validator::make($request->all(), [
            'plant_owner' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        // dd($validator->fails(), $validator);
        
            $plant= new Plants();
        $plant->location=$request->input('location');
        $plant->area=$request->input('area');
        $plant->account=$request->input('account');
        $plant->universal=$request->input('universal');
        $plant->plant_owner=$request->input('plant_owner');
        if ($request->input('notes')) {
            $plant->notes = $request->input('notes');
        }
        $plant->created_by=$_SESSION['id'];

        $plant->save();
        return redirect('/ownerPlants')
            ->with("success", "Plant created successfully");
        }else{
            return redirect('/login');
        }
    }


    public function edit($id)
    {
        if(isset($_SESSION['id'])){

            $plant=Plants::find($id);
        return view('plant-owner.index',compact('plant'));
        }else{
            return redirect('/login');
        }

    }

    public function update(Request $request,$id)
    {
        if(isset($_SESSION['id'])){

            $plant=Plants::find($id);
        $plant->location=$request->input('location');
        $plant->area=$request->input('area');
        $plant->account=$request->input('account');
        $plant->universal=$request->input('universal');
        $plant->updated_by=$_SESSION['id'];
            $plant->save();
        return redirect()->back()
            ->with("success", "Plant updated successfully");
        }else{
            return redirect('/login');
        }

    }
    public function destroy($id)
    {
        if(isset($_SESSION['id'])){

            $plant=Plants::find($id);

        $plant->delete();

        return redirect()->back()
            ->with("success", "Plant deleted successfully");
        }else{
            return redirect('/login');
        }
    }
}