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
use App\Owner;
use Illuminate\Http\Request;
use Redirect;
use App\UserParts;

class OwnerPlantReportController extends Controller
{
    public function columns(Request $request)
    {
        $_SESSION['item1']=$request->input('item1');
        $_SESSION['item2']=$request->input('item2');
        $_SESSION['item3']=$request->input('item3');
        $_SESSION['item4']=$request->input('item4');
        $_SESSION['item5']=$request->input('item5');
        $_SESSION['item6']=$request->input('item6');
        $_SESSION['item7']=$request->input('item7');
        $_SESSION['item8']=$request->input('item8');
        $_SESSION['item9']=$request->input('item9');
        $_SESSION['item10']=$request->input('item10');
        $_SESSION['item11']=$request->input('item11');
        $_SESSION['item12']=$request->input('item12');
        $_SESSION['item13']=$request->input('item13');
        $_SESSION['item14']=$request->input('item14');
        $_SESSION['item15']=$request->input('item8');
        $_SESSION['item16']=$request->input('item16');
        $_SESSION['item17']=$request->input('item17');
        $_SESSION['item18']=$request->input('item18');
        return Redirect::back();

    }
    public function index()
    {
        if(isset($_SESSION['id'])) {
            $owners=User::where('usertype','=','3')->get();
            foreach ($owners as $owner){
                $ownerCreate=User::where('id','=',$owner->created_by)->first();
                $owner->createdOwner=$ownerCreate->first_name.' '.$ownerCreate->last_name;
                $ownerUpdate=User::where('id','=',$owner->updated_by)->first();
                if ($ownerUpdate){
                $owner->updatedOwner=$ownerUpdate->first_name.' '.$ownerUpdate->last_name;
                }
            }
            $plants = Plants::all();
            $data = array("owners" => $owners,"plants" => $plants);
            return view('plant-owner.index', $data);
        }
        else{
            return redirect('/login');
        }
    }

    public function editOwner($id)
    {
        $owner=User::find($id);
        return $owner;
    }
    public function updateOwner(Request $request, $id)
    {
        $owner=User::find($id);
        $owner->first_name=$request->first_name;
        $owner->last_name=$request->last_name;
        $owner->phone=$request->phone;
        $owner->email=$request->email;
        if ($request->notes){
        $owner->notes=$request->notes;
        }
        $owner->updated_by=$_SESSION['id'];
        $owner->save();
        if ($owner){
            return 1;
        }else{
            return 0;
        }
    }
    public function edit($id)
    {
        $plant=Plants::find($id);
        return $plant;
    }
    public function update(Request $request, $id)
    {

        $plant=Plants::find($id);
        $plant->location=$request->input('location');
        $plant->area=$request->input('area');
        $plant->account=$request->input('account');
        $plant->universal=$request->input('universal');
        $plant->updated_by=$_SESSION['id'];
        $plant->save();
        if ($plant){
            return 1;
        }else{
            return 0;
        }
    }
    public function ownerplantReport($owner_id,$plant_id)
    {
        if(isset($_SESSION['id'])) {
            $_SESSION['owner_id']=$owner_id;
            $_SESSION['plant_id']=$plant_id;
            $location_name=Plants::find($plant_id);
            $users=User::where('usertype','!=','3')->get();
            $equipment_types=EquipmentType::all();
            $owners=User::where('usertype','=','3')->get();
            $parts = UserParts::where('report_id', $plant_id)->where('user_id', $user_id)->get();
            // dd($parts);
            if (isset($_SESSION['parts'])){
                $parts=$_SESSION['parts'];
            }else{
                $parts=[];
            }
            $job=Jobs::orderBy('id', 'desc')->first();
            if ($job){
            $equipments=EquipmentDetials::where('id','=',$job->equipment_id)->first();
            }
            else{
                $equipments=[];
            }
            $partsData=Parts::all();
//            $equipments=EquipmentDetials::all();
            $data=array("location_name"=>$location_name->location,"users"=>$users,"equipment_types"=>$equipment_types,"owners"=>$owners,'parts'=>$parts,'equipments'=>$equipments,'partsData'=>$partsData);
            return view('plant-owner.report-all',$data);
        }
        else{
            return redirect('/login');
        }
    }
    
    

    
    public function job(Request $request)
    {
        $job=new Jobs();
        $job->jobnumber=$request->job_number_; //done
        $job->estimatedby=$request->estimated_by; //done
        $job->jobdate=$request->job_date; //done
        $job->customerpo=$request->customer_po; //done
        $job->customerwo=$request->customer_wo; //done
        $job->invoicenumber=$request->invoice_number; //done
        $job->invoicedate=$request->invoice_date; //done
        $job->duedate=$request->duedate;
        $job->status=$request->job_status; //done
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
        $job->status3=$request->job_status2;//done
        $job->equipment_id=$_SESSION['equipment_id'];
        $job->owner_id=$_SESSION['owner_id'];
        $job->plant_id=$_SESSION['plant_id'];
        $job->owner_plant_id=$_SESSION['owner_plant_id'];
        $job->part_id=$_SESSION['part_id'];
        $job->created_by=$_SESSION['id'];
        $job->save();
        Session::forget('equipment_id');
        Session::forget('owner_id');
        Session::forget('plant_id');
        Session::forget('owner_plant_id');
        Session::forget('part_id');

    }
    public function storePartData(Request $request)
    {
        if (!isset($_SESSION['parts'])) {
            $_SESSION['parts'] = array();

            $partCheck = Parts::where('id', '=', $request->partidName)->first();
            $part = array('part_name' => $request->partidName, 'condition' => $request->condition, 'work' => $request->work, 'recommendiation' => $request->recommendiation
            , 'price' => $partCheck->price, 'tagNumber' => $partCheck->tag_number, "partNumber" => $partCheck->part_number
            , 'quantity' => $partCheck->quantity);
            array_push($_SESSION['parts'], $part);
        }  else{
            $partCheck = Parts::where('id', '=', $request->partidName)->first();
            $part = array('part_name' => $request->partidName, 'condition' => $request->condition, 'work' => $request->work, 'recommendiation' => $request->recommendiation
            , 'price' => $partCheck->price, 'tagNumber' => $partCheck->tag_number, "partNumber" => $partCheck->part_number
            , 'quantity' => $partCheck->quantity);
            array_push($_SESSION['parts'], $part);
        }
        return 1;
    }
}