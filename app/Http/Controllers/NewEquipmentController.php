<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 12/11/2019
 * Time: 10:25 AM
 */

namespace App\Http\Controllers;
use App\EquipmentDetials;
use Illuminate\Http\Request;


class NewEquipmentController extends Controller
{
    public function storeEquipmentInfo(Request $request)
    {
        $equipmentDetials=new EquipmentDetials();
        $equipmentDetials->tag_number=$request->tag_number;
        $equipmentDetials->unit_vessel=$request->unit_vessel;
        $equipmentDetials->name=$request->name;
        $equipmentDetials->status=$request->status;
        $equipmentDetials->universal1=$request->universal1;
        $equipmentDetials->model_number=$request->model_number;
        $equipmentDetials->nb_registration=$request->nb_registration;
        $equipmentDetials->sizing_text=$request->sizing_text;
        $equipmentDetials->purchase_price=$request->purchase_price;
        $equipmentDetials->service=$request->service;
        $equipmentDetials->code_stamp=$request->code_stamp;
        $equipmentDetials->serial_number=$request->serial_number;
        $equipmentDetials->device_type=$request->device_type;
        $equipmentDetials->equipment_location=$request->equipment_location;
        $equipmentDetials->equipment_link=$request->equipment_link;
        $equipmentDetials->job_number=$request->job_number;
        $equipmentDetials->manufacturer=$request->manufacturer;
        $equipmentDetials->registration=$request->registration;
        $equipmentDetials->universal2=$request->universal2;
        $equipmentDetials->risk=$request->risk;
        $equipmentDetials->product=$request->product;
        $equipmentDetials->code_required=$request->code_required;
        $equipmentDetials->capacity=$request->capacity;
        $equipmentDetials->description=$request->description;  //add it in db

        $equipmentDetials->save();

    }
}