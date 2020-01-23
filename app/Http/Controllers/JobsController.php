<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/26/2019
 * Time: 2:06 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jobs;
use App\Jobs_info;
use App\Equipment;
use App\EquipmentType;
use App\Owner;
use App\Parts;
use App\EntryType;

class JobsController extends Controller
{
    public function create()
    {
        $owners=Owner::all();
        $entryTypes=EntryType::all();
        $equipments=Equipment::all();
        $equipment_types=EquipmentType::all();
        $data=array("owners"=>$owners,"equipments"=>$equipments,"equipment_types"=>$equipment_types,'entryTypes'=>$entryTypes);
        return view('jobs.create',$data);
    }
    public function getEquipment($id)
    {
            $eqipments = Equipment::where('owner_id', '=', $id)->get();
            return $eqipments;

    }
    public function getParts($id)
    {
        $parts = Parts::where('equipment_id', '=', $id)->get();
        return $parts;

    }
    public function store(Request $request)
    {
        $counter=$request->counter;
        if ($counter==null){
            $job=new Jobs();
            $job->jobnumber=$request->jobnumber;
            $job->estimatedby=$request->estimatedby;
            $job->jobdate=$request->jobdate;
            $job->customerpo=$request->customerpo;
            $job->customerwo=$request->customerwo;
            $job->invoicenumber=$request->invoicenumber;
            $job->invoicedate=$request->invoicedate;
            $job->duedate=$request->duedate;
            $job->entry_type_id=$request->entry;
            $job->jobdetails=$request->jobdetails;
            $job->estimate=$request->estimate;
            if ($request->jobactive==null){
                $job->jobactive='0';
            }
            else{
            $job->jobactive=$request->jobactive;
            }
            if ($request->invoiced==null){
                $job->invoiced='0';
            }
            else{
                $job->invoiced=$request->invoiced;
            }

            if ($request->paid==null){
                $job->paid='0';
            }
            else{
                $job->paid=$request->paid;
            }
            if ($request->archived==null){
                $job->archived='0';
            }
            else{
                $job->archived=$request->archived;
            }
            $job->save();
            $jobInfo=new Jobs_info();
            $jobInfo->owner_id=$request->input('owner1');
            $jobInfo->equipment_id=$request->input('equipment1');
            $jobInfo->equipment_part_job=$request->input('part1');
            $jobInfo->job_id=$job->id;
            $jobInfo->save();
        }
        else{

            $job=new Jobs();
            $job->jobnumber=$request->jobnumber;
            $job->estimatedby=$request->estimatedby;
            $job->jobdate=$request->jobdate;
            $job->customerpo=$request->customerpo;
            $job->customerwo=$request->customerwo;
            $job->invoicenumber=$request->invoicenumber;
            $job->invoicedate=$request->invoicedate;
            $job->duedate=$request->duedate;
            $job->entry_type_id=$request->entry;
            $job->jobdetails=$request->jobdetails;
            $job->estimate=$request->estimate;
            if ($request->jobactive==null){
                $job->jobactive='0';
            }
            else{
                $job->jobactive='1';
            }
            if ($request->invoiced==null){
                $job->invoiced='0';
            }
            else{
                $job->invoiced='1';
            }
            if ($request->paid==null){
                $job->paid='0';
            }
            else{
                $job->paid='1';
            }
            if ($request->archived==null){
                $job->archived='0';
            }
            else{
                $job->archived='1';
            }

            $job->save();
            for ($i=1;$i<=$counter;$i++)
            {
            $jobInfo=new Jobs_info();
            $jobInfo->owner_id=$request->input('owner'.$i);
            $jobInfo->equipment_id=$request->input('equipment'.$i);
            $jobInfo->equipment_part_job=$request->input('part'.$i);
            $jobInfo->job_id=$job->id;
            $jobInfo->save();
            }
        }
        return redirect('/jobs');
    }
    public function index()
    {
        $jobs=Jobs::all();
        return view('jobs.index')->with('jobs',$jobs);
    }

    public function details($id)
    {
        $job = Jobs::find($id);
        $jobinfo = Jobs_info::where('job_id', $id)->get();
        return view('jobs.details')->with('job',$job)->with('jobinfo', $jobinfo);
    }

    public function info($id)
    {
        $jobInfo = Jobs_info::where('job_id', $id)->get();
        return view('jobs.info')->with('jobInfo', $jobInfo);
    }
}