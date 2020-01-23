<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/18/2019
 * Time: 10:13 PM
 */

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\EquipmentType;
use Illuminate\Http\Request;

class EquipmentTypeController extends Controller
{
    public function create()
    {
        if(isset($_SESSION['id'])){
        return view('equipmentType.create');
        }else{
            return redirect('/login');
        }
    }

    public function index()
    {
        if(isset($_SESSION['id'])){

        $equipments=EquipmentType::all();
        return view('equipmentType.index',compact('equipments'));
        }else{
            return redirect('/login');
        }
    }


    public function store(Request $request)
    {
        if(isset($_SESSION['id'])){

            $equipment= new EquipmentType();
        $equipment->name=$request->input('name');
            $equipment->created_by=$_SESSION['id'];

        $equipment->save();
        return redirect()
            ->route("equipmentType.index")
            ->with("success", "Equipment Type created successfully");
        }else{
            return redirect('/login');
        }
    }


    public function edit($id)

    {
        if(isset($_SESSION['id'])) {

            $equipment = EquipmentType::find($id);

            return view('equipmentType.edit', compact('equipment'));
        }
        else{
            return redirect('/login');
        }
    }

    public function update(Request $request,$id)

    {
        if(isset($_SESSION['id'])) {

        $equipment=EquipmentType::find($id);

        $equipment->name=$request->input('name');
        $equipment->updated_by=$_SESSION['id'];
        $equipment->save();
        return redirect()
            ->route("equipmentType.index")
            ->with("success", "Equipment Type updated successfully");
        }
        else{
            return redirect('/login');
        }

    }
    public function destroy($id)
    {
        if(isset($_SESSION['id'])) {

            $equipment = EquipmentType::find($id);

            $equipment->delete();

            return redirect()
                ->route("equipmentType.index")
                ->with("success", "Entry Type deleted successfully");
        }
        else{
                return redirect('/login');
            }
    }
}