<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/20/2019
 * Time: 4:29 PM
 */

namespace App\Http\Controllers;
use App\Equipment;
use App\EquipmentType;
use App\Parts;
use App\Plants;
use App\EquipmentDetails;
use App\EquipmentImage;
use App\Owner;
use App\Jobs;

use App\EquipmentParts;
use App\EquipmentDetials;
use App\EquipmentTest;
use App\EquipmentsValve;
use App\EquipmentCosts;
use App\EquipmentProcess;
use App\EquipmentCritical;
use App\RogParts;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function createnew()
    {
        if(isset($_SESSION['id'])) {
        $equipment_types=EquipmentType::all();
        $owners=Owner::all();
        $parts=Parts::all();

        $data=array("equipment_types"=>$equipment_types,"owners"=>$owners,'parts'=>$parts);
        return view('equipment.createnew',$data);
    }
        else{
        return redirect('/login');
        }
    }
    public function create()
    {
        $equipment_types=EquipmentType::all();
        $owners=Owner::all();
        $data=array("equipment_types"=>$equipment_types,"owners"=>$owners);
        return view('equipment.create',$data);
    }

    public function index()
    {

        $equipments=Equipment::all();
        return view('equipment.index',compact('equipments'));
    }
    public function getPlants($id)
    {
        $plants=Plants::where('owner_id','=',$id)->get();
        return $plants;
    }

    public function store(Request $request)
    {
        if(isset($_SESSION['id'])) {
            $equipment = new Equipment();
            $equipment->tag_number = $request->input('tag_number');
            $equipment->unit_vessel = $request->input('unit_vessel');
            $equipment->code_stamp = $request->input('code_stamp');
            $equipment->service = $request->input('service');
            $equipment->manufacture = $request->input('manufacture');
            $equipment->model_number = $request->input('model_number');
            $equipment->maintenance_for = $request->input('maintenance_for'); //not found
            $equipment->date_taster = $request->input('date_taster'); //not found
            $equipment->total_repair_cost = $request->input('total_repair_cost');
            $equipment->set_pressure = $request->input('set_pressure');
            $equipment->final_test_press = $request->input('final_test_press');
            $equipment->status = $request->input('status');
            $equipment->comment = $request->input('comment');
            $equipment->template = $request->input('template');
            $equipment->saved_template = $request->input('saved_template');
            $equipment->current_template = $request->input('current_template');
            $equipment->internal = $request->input('internal');
            $equipment->saved_internal = $request->input('saved_internal');
            $equipment->current_internal = $request->input('current_internal');
            $equipment->nb_registration = $request->input('nb_registration');
            $equipment->set_vacuum = $request->input('set_vacuum');
            $equipment->next_test_date = $request->input('next_test_date');
            $equipment->next_maint_date = $request->input('next_maint_date');
            $equipment->next_maint_for = $request->input('next_maint_for');
            $equipment->valve_size = $request->input('valve_size');
            $equipment->job_number = $request->input('job_number');
            $equipment->risk = $request->input('risk');
            $equipment->universal = $request->input('universal');
            $equipment->serial_number = $request->input('serial_number');
            $equipment->owner_id = $request->input('owner');
//        $equipment->plant_id=$request->input('plant');
            $equipment->equipment_id = $request->input('equipment');
            $equipment->created_by = $_SESSION['id'];

            $equipment->save();

            $eqipmentDetails = new EquipmentDetails();
            $eqipmentDetails->tag_number = $request->input('tag_number3');
            $eqipmentDetails->unit_vessel = $request->input('unit_vessel2');
            $eqipmentDetails->name = $request->input('name');
            $eqipmentDetails->status = $request->input('status2');
            $eqipmentDetails->universal1 = $request->input('universal12');
            $eqipmentDetails->model_number = $request->input('model_number2');
            $eqipmentDetails->nb_registration = $request->input('nb_registration2');
            $eqipmentDetails->sizing_basic = $request->input('sizing_basic');
            $eqipmentDetails->purchase_price = $request->input('purchase_price');
            $eqipmentDetails->service = $request->input('service2');
            $eqipmentDetails->code_stamp = $request->input('code_stamp2');
            $eqipmentDetails->serial_number = $request->input('serial_number2');
            $eqipmentDetails->device_number = $request->input('device_number');
            $eqipmentDetails->equipment_location = $request->input('equipment_location');
            $eqipmentDetails->equipment_link = $request->input('equipment_link');
            $eqipmentDetails->job_number = $request->input('job_number2');
            $eqipmentDetails->manufacture = $request->input('manufacture2');
            $eqipmentDetails->registration = $request->input('registration2');
            $eqipmentDetails->universal2 = $request->input('universal22');
            $eqipmentDetails->risk = $request->input('risk2');
            $eqipmentDetails->product = $request->input('product');
            $eqipmentDetails->code_required = $request->input('code_required');
            $eqipmentDetails->capacity = $request->input('capacity');
            $eqipmentDetails->description = $request->input('description');
            $eqipmentDetails->equipment_id= $equipment->id;
            $eqipmentDetails->save();
            if ($request->part)
            {
                $equipment_part=new EquipmentParts();
                $equipment_part->equipment_id=$equipment->id;
                $equipment_part->part_id=$request->part;
                $equipment_part->save();
            }
            else{
            $part = new Parts();
            $request->validate([
                'tag_number5'=>'required',
                'date'=>'required',
                'part_number'=>'required',
                'condition_rec'=>'required',
                'nd_condition_rec'=>'required',
                'material'=>'required',
                'source'=>'required',
                'quantity'=>'required',
                'price'=>'required',
                'cost'=>'required',
                'work_performed'=>'required',
                'recommendation'=>'required',
                'parts_code'=>'required',
                'parts_uni'=>'required',
                'delivery_date'=>'required',

            ]);
            $part->tag_number = $request->input('tag_number5');
            $part->date = $request->input('date');
            $part->part_number = $request->input('part_number');
            $part->part_name = $request->input('part_name');
            $part->condition_rec = $request->input('condition_rec');
            $part->nd_condition_rec = $request->input('nd_condition_rec');
            $part->material = $request->input('material');
            $part->source = $request->input('source');
            $part->quantity = $request->input('quantity');
            $part->price = $request->input('price');
            $part->cost = $request->input('cost');
            $part->work_performed = $request->input('work_performed');
            $part->recommendation = $request->input('recommendation');
            $part->parts_code = $request->input('parts_code');
            $part->parts_uni = $request->input('parts_uni');
            $part->delivery_date = $request->input('delivery_date');
            $part->created_by = $_SESSION['id'];
            $part->save();
            $equipmentPart=new EquipmentParts();
             $equipmentPart->equipment_id=$equipment->id;
             $equipmentPart->part_id=$part->id;
             $equipmentPart->save();
            }
            return redirect()->back()
                ->with("success", "Equipment created successfully");
        }
    }


    public function edit($id)

    {
//        $plants=Plants::all();
        $equipment_types=EquipmentType::all();
        $owners=Owner::all();
        $equipment=Equipment::find($id);
        $data=array("equipment_types"=>$equipment_types,"owners"=>$owners);
        return view('equipment.edit',$data)->with('equipment',$equipment);


    }

    public function update(Request $request,$id)

    {
        $equipment=Equipment::find($id);
        $equipment->tag_number=$request->input('tag_number');
        $equipment->unit_vessel=$request->input('unit_vessel');
        $equipment->code_stamp=$request->input('code_stamp');
        $equipment->service=$request->input('service');

        $equipment->manufacture=$request->input('manufacture');
        $equipment->model_number=$request->input('model_number');
        $equipment->maintenance_for=$request->input('maintenance_for');
        $equipment->date_taster=$request->input('date_taster');

        $equipment->total_repair_cost=$request->input('total_repair_cost');
        $equipment->set_pressure=$request->input('set_pressure');
        $equipment->final_test_press=$request->input('final_test_press');
        $equipment->status=$request->input('status');

        $equipment->comment=$request->input('comment');
        $equipment->template=$request->input('template');
        $equipment->saved_template=$request->input('saved_template');
        $equipment->current_template	=$request->input('current_template');

        $equipment->internal=$request->input('internal');
        $equipment->saved_internal=$request->input('saved_internal');
        $equipment->current_internal=$request->input('current_internal');
        $equipment->nb_registration=$request->input('nb_registration');

        $equipment->set_vacuum=$request->input('set_vacuum');
        $equipment->next_test_date=$request->input('next_test_date');
        $equipment->next_maint_date=$request->input('next_maint_date');
        $equipment->next_maint_for	=$request->input('next_maint_for');

        $equipment->valve_size=$request->input('valve_size');
        $equipment->job_number=$request->input('job_number');
        $equipment->risk=$request->input('risk');
        $equipment->universal=$request->input('universal');

        $equipment->serial_number=$request->input('serial_number');

        $equipment->owner_id=$request->input('owner');
        $equipment->plant_id=$request->input('plant');
        $equipment->equipment_id=$request->input('equipment');

        $equipment->save();
        return redirect('/equipment')
            ->with("success", "Equipment updated successfully");


    }
    public function destroy($id)
    {
        $equipment=Equipment::find($id);

        $equipment->delete();

        return redirect()->back()
            ->with("success", "Equipment deleted successfully");
    }
    public function storeNewEquipemtn(Request $request)
    {
 
    
            
        if ($request->addequipment && isset($_SESSION['owner_id'])) {
            $user_id = $_SESSION['owner_id'];
            $plant_id = $_SESSION['plant_id'];
            $general = EquipmentDetials::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
            if(!$general){
                $general = new EquipmentDetials();
            }
            $general->tag_number = $request->tag_number;
            $general->unit_vessel = $request->unit_vessel;
            $general->name = $request->name;
            $general->status = $request->status;
            $general->universal1 = $request->universal1;
            $general->model_number = $request->model_number;
            $general->nb_registration = $request->nb_registration;
            $general->sizing_text = $request->sizing_text;
            $general->purchase_price = $request->purchase_price;
            $general->service = $request->service;
            $general->code_stamp = $request->code_stamp;
            $general->serial_number = $request->serial_number;
            $general->device_type = $request->device_type;
            $general->equipment_location = $request->equipment_location;
            $general->equipment_link = $request->equipment_link;
            $general->job_number = $request->job_number;
            $general->manufacturer = $request->manufacturer;
            $general->registration = $request->registration;
            $general->universal2 = $request->universal2;
            $general->risk = $request->risk;
            $general->product = $request->product;
            $general->code_required = $request->code_required;
            $general->capacity = $request->capacity;
            $general->description = $request->description;
            $general->owner_id = $user_id;
            $general->plant_id = $plant_id;
            // dd($general);
            $general->save();

            $valve = EquipmentsValve::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
            if(!$valve){
                $valve = new EquipmentsValve();
            }
            // $valve = new EquipmentsValve();
            $valve->inlet_size = $request->inlet_size1;
            $valve->inlet_rating = $request->inlet_rating1;
            $valve->inlet_facing = $request->inlet_facing1;
            $valve->inlet_other = $request->inlet_other1;
            $valve->rupture_disk = "51"; //
            $valve->soft_seat_mat1 = $request->soft_seat_mat11;
            $valve->body_material = $request->body_material1;
            $valve->trim_material = $request->trim_material1;
//        $valve->inlet_size=$request->inlet_size1;
//        $valve->inlet_rating=$request->inlet_rating1;
//        $valve->inlet_facing=$request->inlet_facing1;
//        $valve->inlet_other=$request->inlet_other1;
            $valve->spring_number = $request->spring_number1;
            $valve->spring_material = $request->spring_material1;
            $valve->style = $request->style1;
            $valve->traveller = $request->traveller1;
            $valve->class = $request->class1;
            $valve->discharges_to = $request->discharges_to1;
            $valve->orifice_designation = $request->orifice_designation1;
            $valve->mfg_lift = $request->mfg_lift1;
            $valve->outlet_size = $request->outlet_size1;
            $valve->outlet_rating = $request->outlet_rating1;
            $valve->outlet_facing = $request->outlet_facing1;
            $valve->outlet_other = $request->outlet_other1;
            $valve->config_universal = $request->config_universal1;
            $valve->bonnet_material = $request->bonnet_material1;
            $valve->bellows_material = $request->bellows_material1;
            $valve->spring_range_from = $request->spring_range_from1;
            $valve->spring_range_to = $request->spring_range_to1;
            $valve->bonnet = $request->bonnet1;
            $valve->cap_type = $request->cap_type1;
            $valve->config_univ2 = $request->config_univ21;
            $valve->alternate_relief = $request->alternate_relief1;
            $valve->area = $request->area1;
            $valve->restricted_lift = $request->restricted_lift1;
            $valve->equipment_id = $general->id;
            $valve->owner_id = $user_id;
            $valve->plant_id = $plant_id;
            $valve->save();

            // still
            $cost = new EquipmentCosts();
            $cost = EquipmentCosts::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
            if(!$cost){
                $cost = new EquipmentCosts();
            }
            $cost->equipment1 = $request->equipment11;
            $cost->equipment2 = $request->equipment12;
            $cost->equipment3 = $request->equipment13;
            $cost->equipment4 = $request->equipment14;
            $cost->equipment5 = $request->equipment15;
            $cost->equipment6 = $request->equipment16;
            $cost->equipment7 = $request->equipment17;
            $cost->equipment8 = $request->equipment18;
            $cost->equipment9 = $request->equipment19;
            $cost->equipment10 = $request->equipment110;
            $cost->equipment11 = $request->equipment111;
            $cost->equipment12 = $request->equipment112;
            $cost->parts_cost = $request->parts_cost2;
            $cost->labor_cost = $request->labor_cost2;
            $cost->misc_cost = $request->misc_cost2;
            $cost->handing_cost = $request->handing_cost2;
            $cost->total_cost = $request->total_cost2;
            $cost->total_repair_time = $request->total_repair_time2;
            $cost->field_time = $request->field_time2;
            $cost->qc_inspector = $request->qc_inspector2;
            $cost->comment = $request->comment2;
            $cost->equipment_id = $general->id;
            $cost->owner_id = $user_id;
            $cost->plant_id = $plant_id;
            $cost->save();

            // $process = new EquipmentProcess();
            $process = EquipmentProcess::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
            if(!$process){
                $process = new EquipmentProcess();
            }
            $process->set_pressure = $request->set_pressure3;
            $process->mawp = $request->mawp3;
            $process->back_pressure = $request->back_pressure3;
            $process->asme_capacity = $request->asme_capacity3;
            $process->required3 = $request->required3;
            $process->blow_down = $request->blow_down3;
            $process->set_pressure1 = $request->set_pressure13;
            $process->capacity = $request->capacity3;
            $process->temperature = $request->temperature3;
            $process->model_number = $request->model_number3;
            $process->operating_temp = $request->operating_temp3;
            $process->operating_press = $request->operating_press3;
            $process->cold_diff = $request->cold_diff3;
            $process->amount_constant = $request->amount_constant3;
            $process->req_blow_down = $request->req_blow_down3;
            $process->set_pressure2 = $request->set_pressure23;
            $process->capacity2 = $request->capacity23;
            $process->temperature2 = $request->temperature23;
            $process->model_number2 = $request->model_number23;
            $process->repair_company = $request->repair_company3;
            $process->equipment_id = $general->id;
            $process->owner_id = $user_id;
            $process->plant_id = $plant_id;
            $process->save();

            // $test = new EquipmentTest();
            $test = EquipmentTest::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
            if(!$test){
                $test = new EquipmentTest();
            }
            $test->repair_company = $request->repair_company4;
            $test->date_tested = $request->date_tested4;
            $test->assembled_by = $request->assembled_by4;
            $test->test_media = $request->test_media4;
            $test->gauge1 = $request->gauge14;
            $test->finial_test = $request->finial_test4;
            $test->reset_press = $request->reset_press4;
            $test->blow_down = $request->blow_down4;

            $test->measured_lift = $request->measured_lift4;
            $test->ring_up = $request->ring_up4;
            $test->next_maint_is = $request->next_maint_is4;
            $test->for = $request->for4;
            $test->replace_valve_next = $request->replace_valve_next4;
            $test->comment = $request->comment4;
            $test->test_univ2 = $request->test_univ24;
            $test->test_by = $request->test_by4;

            $test->witnessed_by = $request->witnessed_by4;
            $test->test_method = $request->test_method4;
            $test->gauge2 = $request->gauge24;
            $test->leaking_reate = $request->leaking_reate4;
            $test->option1 = $request->option14;
            $test->back_press_test = $request->back_press_test4;
            $test->option2 = $request->option24;
            $test->comp_screw_test = $request->comp_screw_test4;

            $test->over_lap = $request->over_lap4;
            $test->bd_ring = $request->bd_ring4;
            $test->next_main_date = $request->next_main_date4;
            $test->next_test_date = $request->next_test_date4;
            $test->equipment_id = $general->id;
            $test->owner_id = $user_id;
            $test->plant_id = $plant_id;
            $test->save();

    
            $parts = RogParts::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
            if(!$parts){
                $parts = new RogParts();
            }
            // $parts = new RogParts();
            $parts->date_received = $request->date_received5;
            $parts->received_by = $request->received_by5;
            $parts->universal = $request->universal5;
            $parts->dismb = $request->dismb5;
            $parts->maintenance_is = $request->maintenance_is5;
            $parts->for = $request->for5;
            $parts->special_cleaning = $request->special_cleaning5;
            $parts->date = $request->date5;
            $parts->pretest = $request->pretest5;
            $parts->prepop_reason = $request->prepop_reason5;
            $parts->prepop_reason2 = $request->prepop_reason25;
            $parts->propped = $request->propped5;
            $parts->leak_test = $request->leak_test5;
            $parts->option = $request->option5;
            $parts->comp_screw_recd = $request->comp_screw_recd5;
            $parts->prev_repair_compant = $request->prev_repair_compant5;
            $parts->seal_id = $request->seal_id5;
    //      $parts->comment=$request->comment5;
            $parts->seal = $request->seal5;
            $parts->nameplate = $request->nameplate5;
            $parts->equipment_id = $general->id;
            $parts->owner_id = $user_id;
            $parts->plant_id = $plant_id;
            $parts->save();

            // $critical = new EquipmentCritical();
            $critical = EquipmentCritical::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
            if(!$critical){
                $critical = new EquipmentCritical();
            }
            $critical->measured1 = $request->measured16;
            $critical->manufactuers1 = $request->manufactuers16;
            $critical->measured2 = $request->measured26;
            $critical->manufactuers2 = $request->manufactuers26;
            $critical->measured3 = $request->measured36;
            $critical->manufactuers3 = $request->manufactuers36;
            $critical->measured4 = $request->measured46;
            $critical->manufactuers4 = $request->manufactuers46;
            $critical->measured5 = $request->measured56;
            $critical->manufactuers5 = $request->manufactuers56;
            $critical->measured6 = $request->measured66;
            $critical->manufactuers6 = $request->manufactuers66;
            $critical->measured7 = $request->measured76;
            $critical->manufactuers7 = $request->manufactuers76;
            $critical->measured8 = $request->measured86;
            $critical->manufactuers8 = $request->manufactuers86;
            $critical->measured9 = $request->measured96;
            $critical->manufactuers9 = $request->manufactuers96;
            $critical->measured10 = $request->measured106;
            $critical->manufactuers10 = $request->manufactuers106;
            $critical->equipment_id = $general->id;
            $critical->owner_id = $user_id;
            $critical->plant_id = $plant_id;
            $critical->save();
            if ($request->images!=null) {
                // $Equipmentimage = new EquipmentImage();
                $Equipmentimage = Equipmentimage::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
                if(!$Equipmentimage){
                    $Equipmentimage = new Equipmentimage();
                }
                $image = $request->images;
                $spa = time() . $image->getClientOriginalName();
                $image->move('uploads/files/', $spa);
                $Equipmentimage->image = 'uploads/files/' . $spa;
                $Equipmentimage->equipment_id = $general->id;
                $Equipmentimage->owner_id = $user_id;
                $Equipmentimage->plant_id = $plant_id;
                $Equipmentimage->save();
            }
            $_SESSION['equipment_id'] = $general->id;
            if (isset($_SESSION['part_id'])) {
                $EP = new EquipmentParts();
                $EP->equipment_id = $general->id;
                $EP->part_id = $_SESSION['part_id'];


                $EP->save();
            }
            return redirect()->route('ownerplantreport', [$_SESSION['owner_id'], $_SESSION['plant_id'] ])->with('general', $general);
        }
        if ($request->addjob && isset($_SESSION['owner_id'])){
            $user_id = $_SESSION['owner_id'];
            $plant_id = $_SESSION['plant_id'];
            $job=new Jobs();
            $job = Jobs::where('owner_id', $user_id)->where('plant_id', $plant_id)->first();
            if(!$job){
                $job = new Jobs();
            }
            $job->owner_id = $user_id;
            $job->plant_id = $plant_id;
            $job->jobnumber=$request->job_number_; //done
            $job->estimatedby=$request->estimated_by; //done
            $job->jobdate=$request->job_date; //done
            $job->customerpo=$request->customer_po; //done
            $job->customerwo=$request->customer_wo; //done
            $job->invoicenumber=$request->invoice_number; //done
            $job->invoicedate=$request->invoice_date; //done
            $job->duedate=$request->duedate;
            $job->status=$request->job_status; //done
            $job->status2=$request->job_status2; //done
            $job->note=$request->note; //done
            $job->note2=$request->note2; //done
            $job->location_name=$request->job_location_name; //done
            $job->location_uni1=$request->job_location_uni1; //done
            $job->equipment_type=$request->job_equipment_type; //done
            $job->location_uni2=$request->job_location_uni2;//done
            $job->link_name=$request->job_link_name;//done
            $job->link_uni2=$request->job_link_uni2;//done
            $job->link_uni1=$request->job_link_uni1;//done
            $job->link_uni3=$request->job_link_uni3;//done
            $job->status3=$request->job_status3;//done
            if (isset($_SESSION['equipment_id']))
            $job->equipment_id=$_SESSION['equipment_id'];
            $job->owner_id=$_SESSION['owner_id'];
            $job->plant_id=$_SESSION['plant_id'];
            if (isset($_SESSION['owner_plant_id']))
            $job->owner_plant_id=$_SESSION['owner_plant_id'];
            if (isset($_SESSION['part_id']))

                $job->part_id=$_SESSION['part_id'];
            $job->created_by=$_SESSION['id'];
            $job->save();
//            if (isset($_SESSION['equipment_id']))
//
//                Session::forget('equipment_id');
//            if (isset($_SESSION['owner_id']))
//
//            Session::forget('owner_id');
//            if (isset($_SESSION['plant_id']))
//
//                Session::forget('plant_id');
//            if (isset($_SESSION['owner_plant_id']))
//
//                Session::forget('owner_plant_id');
//            if (isset($_SESSION['part_id']))
//
//                Session::forget('part_id');
            // return redirect('/ownerPlants');
            return redirect()->route('ownerplantreport', [$_SESSION['owner_id'], $_SESSION['plant_id'] ]);
        }
        
        return redirect('/login');

    }
    public function cancel()
    {
        return redirect('/ownerplantReport');
    }
}