<?php

/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 12/2/2019
 * Time: 11:30 PM
 */

namespace App\Http\Controllers;

use App\Equipment;
use App\EquipmentDetials;
use App\Jobs;
use App\RogParts;
use App\User;
use App\EquipmentType;
use App\EquipmentDetails;
use App\Parts;
use App\Plants;
use App\EquipmentParts;
use App\EquipmentTest;
use App\EquipmentsValve;
use App\EquipmentCosts;
use App\EquipmentProcess;
use App\EquipmentCritical;
use App\EquipmentImage;
use App\UserParts;
use App\Owner;
use App\DynamicColumns;
use App\DynamicUserColumns;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Validator;

class OwnerPlantController extends Controller
{
    public function columns(Request $request)
    {
        $_SESSION['item1'] = $request->input('item1');
        $_SESSION['item2'] = $request->input('item2');
        $_SESSION['item3'] = $request->input('item3');
        $_SESSION['item4'] = $request->input('item4');
        $_SESSION['item5'] = $request->input('item5');
        $_SESSION['item6'] = $request->input('item6');
        $_SESSION['item7'] = $request->input('item7');
        $_SESSION['item8'] = $request->input('item8');
        $_SESSION['item9'] = $request->input('item9');
        $_SESSION['item10'] = $request->input('item10');
        $_SESSION['item11'] = $request->input('item11');
        $_SESSION['item12'] = $request->input('item12');
        $_SESSION['item13'] = $request->input('item13');
        $_SESSION['item14'] = $request->input('item14');
        $_SESSION['item15'] = $request->input('item8');
        $_SESSION['item16'] = $request->input('item16');
        $_SESSION['item17'] = $request->input('item17');
        $_SESSION['item18'] = $request->input('item18');
        // dd($_SESSION);
        if (isset($_SESSION['id'])) {
            $user_id = $_SESSION['owner_id'];
            $plant_id = $_SESSION['plant_id'];
            $columnsData = DynamicUserColumns::where('user_id', $user_id)->where('plant_id', $plant_id)->value('dynamic_column_id');
            $columnsData = json_decode($columnsData);

            $updateRows = array();

            foreach ($request->all() as $index => $data) {
                if ($data != null && $index != '_token') {
                    $updateRows[] = explode('item', $index)[1];
                }
            }

            if (count($updateRows) > 0) {
                foreach ($columnsData as $key => $val) {
                    if (in_array($val->id, $updateRows)) {
                        $val->status = $request->input('item' . $val->id);
                    }
                }
            }

            $updateColumns = DynamicUserColumns::where('user_id', $user_id)->where('plant_id', $plant_id)->first();
            $updateColumns->dynamic_column_id = json_encode($columnsData);
            $updateColumns->save();

            // dd($columnsData, $updateRows, $request->all());
        }

        return Redirect::back();
    }

    public function index()
    {
        if (isset($_SESSION['id'])) {
            $owners = User::where('usertype', '=', '3')->get();

            foreach ($owners as $owner) {

                $ownerCreate = User::where('id', '=', $owner->created_by)->first();

                if (!empty($ownerCreate)) {
                    $owner->createdOwner = $ownerCreate->first_name . ' ' . $ownerCreate->last_name;
                    $ownerUpdate = User::where('id', '=', $owner->updated_by)->first();
                }
                if (!empty($ownerUpdate)) {
                    $owner->updatedOwner = $ownerUpdate->first_name . ' ' . $ownerUpdate->last_name;
                }
            }

            $jobs = Jobs::where('equipment_id', '!=', null)->get();
            $plants = Plants::all();
            $data = array("owners" => $owners, "plants" => $plants, "jobs" => $jobs);

            return view('plant-owner.index', $data);
        } else {
            return redirect('/login');
        }
    }

    public function getPlantsOfUser(Request $request)
    {

        // $plants = Plants::where('plant_owner', $request->owner)->get();
        $plants = DB::table('plants')
            ->join('users', 'plants.plant_owner', '=', 'users.id')
            ->where('plant_owner', $request->owner)
            ->select("plants.*", 'users.company_name')
            ->get();
        // $plants = DB::table('plants')
        //         ->select('plant_owner', 'location', 'area', 'account', 'universal', 'created_at', 'updated_at', 'updated_by', 'notes')
        //         ->where('plant_owner', $request->owner)->get();

        return $plants;

        // return response()->json([
        //     'data' => $plants
        // ]);
    }

    public function editOwner($id)
    {
        $owner = User::find($id);
        return $owner;
    }

    public function updateOwner(Request $request, $id)
    {
        $owner = User::find($id);
        $owner->first_name = $request->first_name;
        $owner->last_name = $request->last_name;
        $owner->phone = $request->phone;
        $owner->email = $request->email;
        if ($request->notes) {
            $owner->notes = $request->notes;
        }
        $owner->updated_by = $_SESSION['id'];
        $owner->save();
        if ($owner) {
            return 1;
        } else {
            return 0;
        }
    }

    public function edit($id)
    {
        $plant = Plants::find($id);
        return $plant;
    }

    public function update(Request $request, $id)
    {

        $plant = Plants::find($id);
        $plant->location = $request->input('location');
        $plant->area = $request->input('area');
        $plant->account = $request->input('account');
        $plant->universal = $request->input('universal');
        $plant->updated_by = $_SESSION['id'];
        $plant->save();
        if ($plant) {
            return 1;
        } else {
            return 0;
        }
    }

    public function partStatus(Request $request)
    {
        $partID = $request->part_id;
        $get_parts = DB::table('all_parts')->value('columns_json');

        $partstatus = json_decode($get_parts)->partname;
        foreach ($partstatus as $status) {
            if ($status->id == $partID) {
                $partstatus = $status->status;
                break;
            }
        }

        return response()->json($partstatus);
    }

    public function ownerplantReport($owner_id, $plant_id)
    {
        if (isset($_SESSION['id'])) {
            $_SESSION['owner_id'] = $owner_id;
            $_SESSION['plant_id'] = $plant_id;

            $total_columns = DynamicColumns::all();

            $user_columns = DynamicUserColumns::where('user_id', $owner_id)->where('plant_id', $plant_id)->count();

            if ($user_columns <= 0) {
                $dataArray = array();
                $insert_columns = new DynamicUserColumns();
                foreach ($total_columns as $key => $value) {
                    $dataArray[] = array('id' => $value->id, 'name' => $value->column_name, 'link_id' => $value->link_id, 'status' => $value->status);
                }

                $final_array = json_encode($dataArray);
                $insert_columns->dynamic_column_id = $final_array;
                $insert_columns->plant_id = $plant_id;
                $insert_columns->user_id = $owner_id;
                $insert_columns->save();
            }

            $columnsData = DynamicUserColumns::where('user_id', $owner_id)->where('plant_id', $plant_id)->value('dynamic_column_id');

            $columnsData = json_decode($columnsData);


            $location_name = Plants::find($plant_id);
            $users = User::where('usertype', '!=', '3')->get();
            $equipment_types = EquipmentType::all();
            $owners = User::where('usertype', '=', '3')->get();
            // if (isset($_SESSION['parts'])){
            //     $parts=$_SESSION['parts'];
            // }else{
            //     $parts=[];
            // }
            $parts = UserParts::where('report_id', $plant_id)->where('user_id', $owner_id)->get();
            // $job=Jobs::orderBy('id', 'desc')->first();
            // if ($job){
            $equipments = EquipmentDetials::where('owner_id', '=', $owner_id)->where('plant_id', $plant_id)->first();
            $valve = EquipmentsValve::where('owner_id', '=', $owner_id)->where('plant_id', $plant_id)->first();
            $process = EquipmentProcess::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $rog_rec_parts = RogParts::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $test = EquipmentTest::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $critical = EquipmentCritical::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $cost = EquipmentCosts::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $Equipmentimage = Equipmentimage::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $job = Jobs::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $parts_all = DB::table('all_parts')->value('columns_json');
            $final_parts_all = json_decode($parts_all);
            // dd(json_decode($parts_all));
            //  dd( $parts_all, $final_parts_all);
            // }
            // else{
            //     $equipments=[];
            // }
            $partsData = Parts::all();
            //            $equipments=EquipmentDetials::all();
            $data = array("parts_all" => $final_parts_all, "job" => $job, "Equipmentimage" => $Equipmentimage, "cost" => $cost, "critical" => $critical, "test" => $test, "rog_rec_parts" => $rog_rec_parts, "process" => $process, "valve" => $valve, "columnsData" => $columnsData, "location_name" => $location_name->location, "users" => $users, "equipment_types" => $equipment_types, "owners" => $owners, 'parts' => $parts, 'equipments' => $equipments, 'partsData' => $partsData);
            // dd($data);

            return view('plant-owner.report', $data);
        } else {
            return redirect('/login');
        }
    }

    public function ownerplantCreateReport($owner_id, $plant_id)
    {
        if (isset($_SESSION['id'])) {
            $_SESSION['owner_id'] = $owner_id;
            $_SESSION['plant_id'] = $plant_id;

            $total_columns = DynamicColumns::all();

            $user_columns = DynamicUserColumns::where('user_id', $owner_id)->where('plant_id', $plant_id)->count();

            if ($user_columns <= 0) {
                $dataArray = array();
                $insert_columns = new DynamicUserColumns();
                foreach ($total_columns as $key => $value) {
                    $dataArray[] = array('id' => $value->id, 'name' => $value->column_name, 'link_id' => $value->link_id, 'status' => $value->status);
                }

                $final_array = json_encode($dataArray);
                $insert_columns->dynamic_column_id = $final_array;
                $insert_columns->plant_id = $plant_id;
                $insert_columns->user_id = $owner_id;
                $insert_columns->save();
            }

            $columnsData = DynamicUserColumns::where('user_id', $owner_id)->where('plant_id', $plant_id)->value('dynamic_column_id');

            $columnsData = json_decode($columnsData);


            $location_name = Plants::find($plant_id);
            $users = User::where('usertype', '!=', '3')->get();
            $equipment_types = EquipmentType::all();
            $owners = User::where('usertype', '=', '3')->get();
            // if (isset($_SESSION['parts'])){
            //     $parts=$_SESSION['parts'];
            // }else{
            //     $parts=[];
            // }
            $parts = UserParts::where('report_id', $plant_id)->where('user_id', $owner_id)->get();
            $job = Jobs::orderBy('id', 'desc')->first();
            // if ($job){
            $equipments = EquipmentDetials::where('owner_id', '=', $owner_id)->where('plant_id', $plant_id)->first();
//            $valve = EquipmentsValve::where('owner_id', '=', $owner_id)->where('plant_id', $plant_id)->first();
            $valve = new EquipmentsValve();
            $process = EquipmentProcess::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $rog_rec_parts = RogParts::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $test = EquipmentTest::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $critical = EquipmentCritical::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $cost = EquipmentCosts::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $Equipmentimage = Equipmentimage::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $job = Jobs::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $parts_all = DB::table('all_parts')->value('columns_json');
            $final_parts_all = json_decode($parts_all);
            // dd(json_decode($parts_all));
            //  dd( $parts_all, $final_parts_all);
            // }
            // else{
            //     $equipments=[];
            // }
            $partsData = Parts::all();
            $equipments = EquipmentDetials::all();
            $data = array("parts_all" => $final_parts_all, "job" => $job, "Equipmentimage" => $Equipmentimage, "cost" => $cost, "critical" => $critical, "test" => $test, "rog_rec_parts" => $rog_rec_parts, "process" => $process, "valve" => $valve, "columnsData" => $columnsData, "location_name" => $location_name->location, "users" => $users, "equipment_types" => $equipment_types, "owners" => $owners, 'parts' => $parts, 'equipments' => $equipments, 'partsData' => $partsData);
            // dd($data);

            return view('plant-owner.create-report', $data);
        } else {
            return redirect('/login');
        }
    }

    public function CheckownerplantCreateReport($owner_id, $plant_id)
    {
        if (isset($_SESSION['id'])) {
            $_SESSION['owner_id'] = $owner_id;
            $_SESSION['plant_id'] = $plant_id;

            $total_columns = DynamicColumns::all();

            $user_columns = DynamicUserColumns::where('user_id', $owner_id)->where('plant_id', $plant_id)->count();

            if ($user_columns <= 0) {
                $dataArray = array();
                $insert_columns = new DynamicUserColumns();
                foreach ($total_columns as $key => $value) {
                    $dataArray[] = array('id' => $value->id, 'name' => $value->column_name, 'link_id' => $value->link_id, 'status' => $value->status);
                }

                $final_array = json_encode($dataArray);
                $insert_columns->dynamic_column_id = $final_array;
                $insert_columns->plant_id = $plant_id;
                $insert_columns->user_id = $owner_id;
                $insert_columns->save();
            }

            $columnsData = DynamicUserColumns::where('user_id', $owner_id)->where('plant_id', $plant_id)->value('dynamic_column_id');

            $columnsData = json_decode($columnsData);


            $location_name = Plants::find($plant_id);
            $users = User::where('usertype', '!=', '3')->get();
            $equipment_types = EquipmentType::all();
            $owners = User::where('usertype', '=', '3')->get();
            // if (isset($_SESSION['parts'])){
            //     $parts=$_SESSION['parts'];
            // }else{
            //     $parts=[];
            // }
            $parts = UserParts::where('report_id', $plant_id)->where('user_id', $owner_id)->get();
            // $job=Jobs::orderBy('id', 'desc')->first();
            // if ($job){
            $equipments = EquipmentDetials::where('owner_id', '=', $owner_id)->where('plant_id', $plant_id)->first();
            $valve = EquipmentsValve::where('owner_id', '=', $owner_id)->where('plant_id', $plant_id)->first();
            $process = EquipmentProcess::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $rog_rec_parts = RogParts::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $test = EquipmentTest::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $critical = EquipmentCritical::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $cost = EquipmentCosts::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $Equipmentimage = Equipmentimage::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $job = Jobs::where('owner_id', $owner_id)->where('plant_id', $plant_id)->first();
            $parts_all = DB::table('all_parts')->value('columns_json');
            $final_parts_all = json_decode($parts_all);
            // dd(json_decode($parts_all));
            //  dd( $parts_all, $final_parts_all);
            // }
            // else{
            //     $equipments=[];
            // }
            $partsData = Parts::all();
            //            $equipments=EquipmentDetials::all();
            $data = array("parts_all" => $final_parts_all, "job" => $job, "Equipmentimage" => $Equipmentimage, "cost" => $cost, "critical" => $critical, "test" => $test, "rog_rec_parts" => $rog_rec_parts, "process" => $process, "valve" => $valve, "columnsData" => $columnsData, "location_name" => $location_name->location, "users" => $users, "equipment_types" => $equipment_types, "owners" => $owners, 'parts' => $parts, 'equipments' => $equipments, 'partsData' => $partsData);
            // dd($data);

            return view('plant-owner.create-report', $data);
        } else {
            return redirect('/login');
        }
    }

    public function editOwnerPlantReport($owner_id, $plant_id)
    {
        dd('here i am');
    }


    public function ownerplantAllReports($owner_id, $plant_id)
    {
        if (isset($_SESSION['id'])) {
            $_SESSION['owner_id'] = $owner_id;
            $_SESSION['plant_id'] = $plant_id;
            $equipment_types = EquipmentType::all();
            $owners = User::where('usertype', '=', '3')->get();
            $parts = Parts::all();
            $job = Jobs::orderBy('id', 'desc')->get();
            echo "<pre>";
            print_r($job->equipment_id);
            echo "</pre>";
            die("JH");
            if ($job) {
                $equipments = EquipmentDetials::whereIn('id', $job->equipment_id);
            } else {
                $equipments = [];
            }
            //            $equipments=EquipmentDetials::all();
            $data = array("equipment_types" => $equipment_types, "owners" => $owners, 'parts' => $parts, 'equipments' => $equipments);
            return view('plant-owner.report', $data);
        } else {
            return redirect('/login');
        }
    }

    public function job(Request $request)
    {
        $job = new Jobs();
        $job->jobnumber = $request->job_number_; //done
        $job->estimatedby = $request->estimated_by; //done
        $job->jobdate = $request->job_date; //done
        $job->customerpo = $request->customer_po; //done
        $job->customerwo = $request->customer_wo; //done
        $job->invoicenumber = $request->invoice_number; //done
        $job->invoicedate = $request->invoice_date; //done
        $job->duedate = $request->duedate;
        $job->status = $request->job_status; //done
        $job->note = $request->note; //done
        $job->note2 = $request->note2; //done
        $job->location_name = $request->job_location_name; //done
        $job->location_uni1 = $request->job_location_uni1; //done
        $job->equipment_type = $request->job_equipment_type; //done
        $job->location_uni2 = $request->job_location_uni2; //done
        $job->link_name = $request->job_link_name; //done
        $job->link_uni2 = $request->job_link_uni2; //done
        $job->link_uni1 = $request->job_link_uni1; //done
        $job->link_uni3 = $request->job_link_uni3; //done
        $job->status3 = $request->job_status2; //done
        $job->equipment_id = $_SESSION['equipment_id'];
        $job->owner_id = $_SESSION['owner_id'];
        $job->plant_id = $_SESSION['plant_id'];
        $job->owner_plant_id = $_SESSION['owner_plant_id'];
        $job->part_id = $_SESSION['part_id'];
        $job->created_by = $_SESSION['id'];
        $job->save();
        Session::forget('equipment_id');
        Session::forget('owner_id');
        Session::forget('plant_id');
        Session::forget('owner_plant_id');
        Session::forget('part_id');
    }

    public function storePartData(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'partidName' => 'required',
            'partStatus' => 'required'
        ])->setAttributeNames(
            ['partidName' => 'Part name', 'partStatus' => 'Part Status']
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }

        try {

            $partCheck = array();
            $get_parts = DB::table('all_parts')->value('columns_json');
            $partname = json_decode($get_parts);
            $partstatus = $partname->partname;
            foreach ($partstatus as $status) {
                if ($status->id == $request->partidName) {
                    $status->status = $request->partStatus;
                    $partCheck = $status;
                    break;
                }
            }
            $parts_json = json_decode($get_parts);
            $parts_json->partname = $partstatus;

            DB::table('all_parts')
                ->where('id', 1)
                ->update(['columns_json' => json_encode($parts_json)]);
            $part = array();

            // dd($request->all());
            UserParts::firstOrCreate(
                ['part_id' => $request->partidName, 'report_id' => $_SESSION['plant_id'], 'user_id' => $_SESSION['owner_id']],
                [
                    'part_name' => $partCheck->name,
                    'condition_rec' => $request->condition,
                    'work_performed' => $request->work,
                    'recommendation' => $request->recommendiation,
                    'price' => isset($partCheck->price) ? $partCheck->price : '',
                    'tag_number' => isset($partCheck->tag_number) ? $partCheck->tag_number : '',
                    'part_number' => isset($partCheck->part_number) ? $partCheck->part_number : '',
                    'quantity' => isset($partCheck->quantity) ? $partCheck->quantity : '',
                    'part_id' => $request->partidName,
                    'report_id' => $_SESSION['plant_id'],
                    'user_id' => $_SESSION['owner_id'],
                    'part_status' => $request->partStatus
                ]
            );

            return 1;
        } catch (Exception $e) {
            return false;
        }
    }

    public function storeDouble(Request $request)
    {

        $owner = $request->ownerIDID;
        $job = $request->job_id;
        $plant = $request->plantID;
        $oldJob = Jobs::find($job);
        $equipmentCheck = EquipmentDetials::find($oldJob->equipment_id);
        $general = new EquipmentDetials();
        $general->tag_number = $equipmentCheck->tag_number;
        $general->unit_vessel = $equipmentCheck->unit_vessel;
        $general->name = $equipmentCheck->name;
        $general->status = $equipmentCheck->status;
        $general->universal1 = $equipmentCheck->universal1;
        $general->model_number = $equipmentCheck->model_number;
        $general->nb_registration = $equipmentCheck->nb_registration;
        $general->sizing_text = $equipmentCheck->sizing_text;
        $general->purchase_price = $equipmentCheck->purchase_price;
        $general->service = $equipmentCheck->service;
        $general->code_stamp = $equipmentCheck->code_stamp;
        $general->serial_number = $equipmentCheck->serial_number;
        $general->device_type = $equipmentCheck->device_type;
        $general->equipment_location = $equipmentCheck->equipment_location;
        $general->equipment_link = $equipmentCheck->equipment_link;
        $general->job_number = $equipmentCheck->job_number;
        $general->manufacturer = $equipmentCheck->manufacturer;
        $general->registration = $equipmentCheck->registration;
        $general->universal2 = $equipmentCheck->universal2;
        $general->risk = $equipmentCheck->risk;
        $general->product = $equipmentCheck->product;
        $general->code_required = $equipmentCheck->code_required;
        $general->capacity = $equipmentCheck->capacity;
        $general->description = $equipmentCheck->description;
        $general->save();

        $valveCheck = EquipmentsValve::where('equipment_id', '=', $equipmentCheck->id)->first();

        $valve = new EquipmentsValve();
        $valve->inlet_size = $valveCheck->inlet_size;
        $valve->inlet_rating = $valveCheck->inlet_rating;
        $valve->inlet_facing = $valveCheck->inlet_facing;
        $valve->inlet_other = $valveCheck->inlet_other;
        $valve->rupture_disk = "51"; //
        $valve->soft_seat_mat1 = $valveCheck->soft_seat_mat1;
        $valve->body_material = $valveCheck->body_material;
        $valve->trim_material = $valveCheck->trim_material;
        //        $valve->inlet_size=$request->inlet_size1;
        //        $valve->inlet_rating=$request->inlet_rating1;
        //        $valve->inlet_facing=$request->inlet_facing1;
        //        $valve->inlet_other=$request->inlet_other1;
        $valve->spring_number = $valveCheck->spring_number;
        $valve->spring_material = $valveCheck->spring_material;
        $valve->style = $valveCheck->style;
        $valve->traveller = $valveCheck->traveller;
        $valve->class = $valveCheck->class;
        $valve->discharges_to = $valveCheck->discharges_to;
        $valve->orifice_designation = $valveCheck->orifice_designation;
        $valve->mfg_lift = $valveCheck->mfg_lift;
        $valve->outlet_size = $valveCheck->outlet_size;
        $valve->outlet_rating = $valveCheck->outlet_rating;
        $valve->outlet_facing = $valveCheck->outlet_facing;
        $valve->outlet_other = $valveCheck->outlet_other;
        $valve->config_universal = $valveCheck->config_universal;
        $valve->bonnet_material = $valveCheck->bonnet_material;
        $valve->bellows_material = $valveCheck->bellows_material;
        $valve->spring_range_from = $valveCheck->spring_range_from;
        $valve->spring_range_to = $valveCheck->spring_range_to;
        $valve->bonnet = $valveCheck->bonnet;
        $valve->cap_type = $valveCheck->cap_type;
        $valve->config_univ2 = $valveCheck->config_univ2;
        $valve->alternate_relief = $valveCheck->alternate_relief;
        $valve->area = $valveCheck->area;
        $valve->restricted_lift = $valveCheck->restricted_lift;
        $valve->equipment_id = $general->id;
        $valve->save();

        // still
        $costCheck = EquipmentCosts::where('equipment_id', '=', $equipmentCheck->id)->first();

        $cost = new EquipmentCosts();
        $cost->equipment1 = $costCheck->equipment1;
        $cost->equipment2 = $costCheck->equipment2;
        $cost->equipment3 = $costCheck->equipment3;
        $cost->equipment4 = $costCheck->equipment4;
        $cost->equipment5 = $costCheck->equipment5;
        $cost->equipment6 = $costCheck->equipment6;
        $cost->equipment7 = $costCheck->equipment7;
        $cost->equipment8 = $costCheck->equipment8;
        $cost->equipment9 = $costCheck->equipment9;
        $cost->equipment10 = $costCheck->equipment10;
        $cost->equipment11 = $costCheck->equipment11;
        $cost->equipment12 = $costCheck->equipment12;
        $cost->parts_cost = $costCheck->parts_cost;
        $cost->labor_cost = $costCheck->labor_cost;
        $cost->misc_cost = $costCheck->misc_cost;
        $cost->handing_cost = $costCheck->handing_cost;
        $cost->total_cost = $costCheck->total_cost;
        $cost->total_repair_time = $costCheck->total_repair_time;
        $cost->field_time = $costCheck->field_time;
        $cost->qc_inspector = $costCheck->qc_inspector;
        $cost->comment = $costCheck->comment;
        $cost->equipment_id = $general->id;
        $cost->save();

        $processCheck = EquipmentProcess::where('equipment_id', '=', $equipmentCheck->id)->first();

        $process = new EquipmentProcess();
        $process->set_pressure = $processCheck->set_pressure;
        $process->mawp = $processCheck->mawp;
        $process->back_pressure = $processCheck->back_pressure;
        $process->asme_capacity = $processCheck->asme_capacity;
        $process->required = $processCheck->required;
        $process->blow_down = $processCheck->blow_down;
        $process->set_pressure1 = $processCheck->set_pressure1;
        $process->capacity = $processCheck->capacity;
        $process->temperature = $processCheck->temperature;
        $process->model_number = $processCheck->model_number;
        $process->operating_temp = $processCheck->operating_temp;
        $process->operating_press = $processCheck->operating_press;
        $process->cold_diff = $processCheck->cold_diff;
        $process->amount_constant = $processCheck->amount_constant;
        $process->req_blow_down = $processCheck->req_blow_down;
        $process->set_pressure2 = $processCheck->set_pressure2;
        $process->capacity2 = $processCheck->capacity2;
        $process->temperature2 = $processCheck->temperature2;
        $process->model_number2 = $processCheck->model_number2;
        $process->repair_company = $processCheck->repair_company;
        $process->equipment_id = $general->id;
        $process->save();

        $testCheck = EquipmentTest::where('equipment_id', '=', $equipmentCheck->id)->first();

        $test = new EquipmentTest();
        $test->repair_company = $testCheck->repair_company;
        $test->date_tested = $testCheck->date_tested;
        $test->assembled_by = $testCheck->assembled_by;
        $test->test_media = $testCheck->test_media;
        $test->gauge1 = $testCheck->gauge1;
        $test->finial_test = $testCheck->finial_test;
        $test->reset_press = $testCheck->reset_press;
        $test->blow_down = $testCheck->blow_down;

        $test->measured_lift = $testCheck->measured_lift;
        $test->ring_up = $testCheck->ring_up;
        $test->next_maint_is = $testCheck->next_maint_is;
        $test->for = $testCheck->for;
        $test->replace_valve_next = $testCheck->replace_valve_next;
        $test->comment = $testCheck->comment;
        $test->test_univ2 = $testCheck->test_univ2;
        $test->test_by = $testCheck->test_by;

        $test->witnessed_by = $testCheck->witnessed_by;
        $test->test_method = $testCheck->test_method;
        $test->gauge2 = $testCheck->gauge2;
        $test->leaking_reate = $testCheck->leaking_reate;
        $test->option1 = $testCheck->option1;
        $test->back_press_test = $testCheck->back_press_test;
        $test->option2 = $testCheck->option2;
        $test->comp_screw_test = $testCheck->comp_screw_test;

        $test->over_lap = $testCheck->over_lap;
        $test->bd_ring = $testCheck->bd_ring;
        $test->next_main_date = $testCheck->next_main_date;
        $test->next_test_date = $testCheck->next_test_date;
        $test->equipment_id = $general->id;
        $test->save();

        $rogCheck = RogParts::where('equipment_id', '=', $equipmentCheck->id)->first();

        $parts = new RogParts();
        $parts->date_received = $rogCheck->date_received;
        $parts->received_by = $rogCheck->received_by;
        $parts->universal = $rogCheck->universal;
        $parts->dismb = $rogCheck->dismb;
        $parts->maintenance_is = $rogCheck->maintenance_is;
        $parts->for = $rogCheck->for;
        $parts->special_cleaning = $rogCheck->special_cleaning;
        $parts->date = $rogCheck->date;
        $parts->pretest = $rogCheck->pretest;
        $parts->prepop_reason = $rogCheck->prepop_reason;
        $parts->prepop_reason2 = $rogCheck->prepop_reason2;
        $parts->propped = $rogCheck->propped;
        $parts->leak_test = $rogCheck->leak_test;
        $parts->option = $rogCheck->option;
        $parts->comp_screw_recd = $rogCheck->comp_screw_recd;
        $parts->prev_repair_compant = $rogCheck->prev_repair_compant;
        $parts->seal_id = $rogCheck->seal_id;
        //        $parts->comment=$request->comment5;
        $parts->seal = $rogCheck->seal;
        $parts->nameplate = $rogCheck->nameplate;
        $parts->equipment_id = $general->id;
        $parts->save();

        $criticalCheck = EquipmentCritical::where('equipment_id', '=', $equipmentCheck->id)->first();

        $critical = new EquipmentCritical();
        $critical->measured1 = $criticalCheck->measured1;
        $critical->manufactuers1 = $criticalCheck->manufactuers1;
        $critical->measured2 = $criticalCheck->measured2;
        $critical->manufactuers2 = $criticalCheck->manufactuers2;
        $critical->measured3 = $criticalCheck->measured3;
        $critical->manufactuers3 = $criticalCheck->manufactuers3;
        $critical->measured4 = $criticalCheck->measured4;
        $critical->manufactuers4 = $criticalCheck->manufactuers4;
        $critical->measured5 = $criticalCheck->measured5;
        $critical->manufactuers5 = $criticalCheck->manufactuers5;
        $critical->measured6 = $criticalCheck->measured6;
        $critical->manufactuers6 = $criticalCheck->manufactuers6;
        $critical->measured7 = $criticalCheck->measured7;
        $critical->manufactuers7 = $criticalCheck->manufactuers7;
        $critical->measured8 = $criticalCheck->measured8;
        $critical->manufactuers8 = $criticalCheck->manufactuers8;
        $critical->measured9 = $criticalCheck->measured9;
        $critical->manufactuers9 = $criticalCheck->manufactuers9;
        $critical->measured10 = $criticalCheck->measured10;
        $critical->manufactuers10 = $criticalCheck->manufactuers10;
        $critical->equipment_id = $general->id;
        $critical->save();

        $imagelCheck = EquipmentImage::where('equipment_id', '=', $equipmentCheck->id)->first();

        $Equipmentimage = new EquipmentImage();
        $image = $imagelCheck->image;
        $Equipmentimage->image = 'uploads/files/' . $image;
        $Equipmentimage->equipment_id = $general->id;
        $Equipmentimage->save();

        //        $partCheck=Parts::find($oldJob->part_id);
        //        $part=new Parts();
        //        $part->tag_number = $partCheck->tag_number;
        //        // $part->date = $request->input('date');
        //        $part->part_number = $partCheck->part_number;
        //        $part->part_name = $partCheck->part_name ;
        //        $part->condition_rec = $partCheck->condition_rec;
        //        $part->nd_condition_rec = $partCheck->nd_condition_rec;
        //        $part->material = $partCheck->material;
        //        $part->source = $partCheck->source ;
        //        $part->quantity = $partCheck->quantity ;
        //        $part->price = $partCheck->price ;
        //        $part->cost = $partCheck->cost ;
        //        $part->work_performed = $partCheck->work_performed ;
        //        $part->recommendation = $partCheck->recommendation ;
        //        $part->parts_code = $partCheck->parts_code ;
        //        $part->parts_uni = $partCheck->parts_uni ;
        //        $part->delivery_date = $partCheck->delivery_date ;
        //        $part->equipment_type = $partCheck->equipment_type ;
        //        //   return $request->input('equipment_type');
        //        $part->recommended_spare = $partCheck->recommended_spare ;
        //        $part->part_on_order = $partCheck->part_on_order ;
        //        $part->created_by = $_SESSION['id'];
        //        $part->save();

        $job = new Jobs();
        $job->jobnumber = $oldJob->jobnumber; //done
        $job->estimatedby = $oldJob->estimatedby; //done
        $job->jobdate = $oldJob->jobdate; //done
        $job->customerpo = $oldJob->customerpo; //done
        $job->customerwo = $oldJob->customerwo; //done
        $job->invoicenumber = $oldJob->invoicenumber; //done
        $job->invoicedate = $oldJob->invoicedate; //done
        $job->duedate = $oldJob->duedate;
        $job->status = $oldJob->status; //done
        $job->note = $oldJob->note; //done
        $job->note2 = $oldJob->note2; //done
        $job->location_name = $oldJob->location_name; //done
        $job->location_uni1 = $oldJob->location_uni1; //done
        $job->equipment_type = $oldJob->equipment_type; //done
        $job->location_uni2 = $oldJob->location_uni2; //done
        $job->link_name = $oldJob->link_name; //done
        $job->link_uni2 = $oldJob->link_uni2; //done
        $job->link_uni1 = $oldJob->link_uni1; //done
        $job->link_uni3 = $oldJob->link_uni3; //done
        $job->status3 = $oldJob->status3; //done
        $job->equipment_id = $general->id;
        $job->owner_id = $owner;
        $job->plant_id = $plant;
        //        $job->owner_plant_id=$_SESSION['owner_plant_id'];
        //        $job->part_id=$part;
        $job->created_by = $_SESSION['id'];
        $job->save();
        $users = User::where('id', '!=', '3')->get();
        $location_name = Plants::find($plant);
        $data = array(
            "job" => $job, "location_name" => $location_name->location, "general" => $general, "users" => $users, "critical" => $critical, "rog" => $parts, "test" => $test, "process" => $process, "cost" => $cost, "valve" => $valve
        );
        return view('plant-owner.updateReport', $data);
    }
}