<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/21/2019
 * Time: 10:34 PM
 */

namespace App\Http\Controllers;

use App\Parts;
use App\UserParts;
use Illuminate\Http\Request;
use DB;

class PartsController extends Controller
{
    public function create($id)
    {
        if(isset($_SESSION['id'])){

            return view('parts.create')->with('id',$id);
        }else{
            return redirect('/login');
        }
    }

    public function index($id)
    {
        if(isset($_SESSION['id'])){

            $parts=Parts::where('equipment_id','=',$id)->get();
            return view('parts.index',compact('parts'));
        }else{
            return redirect('/login');
        }
    }


    public function store(Request $request)
    {
        // dd($request->all());
        if(isset($_SESSION['id'])){
            // $part= new Parts();
            try {
                
                $get_parts = DB::table('all_parts')->value('columns_json');
        //   $part_obj = null;
           $parts = json_decode($get_parts)->partname;
               foreach($parts as $part){
                    if($part->name == $request->part_name){
                        $part_obj = $part;
                        break;
                    }
               }
               
            //   dd($parts, $part_obj, $request->part_name);

            //     $part->tag_number = $request->input('tag_number');
            //   // $part->date = $request->input('date');
            //     $part->part_number = $request->input('part_number');
            //     $part->part_name = $request->input('part_name');
            //     $part->condition_rec = $request->input('condition_rec');
            //     $part->nd_condition_rec = $request->input('nd_condition_rec');
            //     $part->material = $request->input('material');
            //     $part->source = $request->input('source');
            //     $part->quantity = $request->input('quantity');
            //     $part->price = $request->input('price');
            //     $part->cost = $request->input('cost');
            //     $part->work_performed = $request->input('work_performed');
            //     $part->recommendation = $request->input('recommendation');
            //     $part->parts_code = $request->input('parts_code');
            //     $part->parts_uni = $request->input('parts_uni');
            //     $part->delivery_date = $request->input('delivery_date');
            //     $part->equipment_type = $request->input('equipment_type');
            //     //   return $request->input('equipment_type');
            //     $part->recommended_spare = $request->input('recommended_spare');
            //     $part->part_on_order = $request->input('part_on_order');
            //     $part->created_by = $_SESSION['id'];
            //     $part->save();
                // dd($part_obj, $part_obj->id);
                
                // dd($input, $request->all());
                $userparts =  UserParts::where('part_id' , $part_obj->id)->where('report_id', $_SESSION['plant_id'])->where( 'user_id', $_SESSION['owner_id'] )->first();
                
                // dd($userparts, $part_obj->id, $_SESSION['plant_id'], $_SESSION['owner_id']);
                if(!$userparts){
                    $userparts = new UserParts();
                    
                }else{
                    $input = collect(request()->all())->filter()->all();
                    $userparts->update($input);
                    return 1;
                }
                $userparts->part_name= $request->part_name; 
                $userparts->condition_rec= $request->condition_rec; 
                $userparts->work_performed= $request->work_performed; 
                $userparts->recommendation= $request->recommendation;
                $userparts->price= $request->price;
                $userparts->tag_number= $request->input('tag_number');
                $userparts->part_number= $request->part_number;
                $userparts->quantity= $request->quantity;
                $userparts->part_id= $part_obj->id;
                $userparts->report_id= $_SESSION['plant_id']; 
                $userparts->user_id= $_SESSION['owner_id'];
                $userparts->delivery_date= $request->delivery_date;
                $userparts->parts_code = $request->parts_code; 
                $userparts->equipment_type = $request->equipment_type; 
                $userparts->recommended_spare = $request->recommended_spare;
                $userparts->part_status= '';
                
                $userparts->save();
                
                // dd( $request->tag_number, $part_obj->id, $_SESSION['plant_id'], $_SESSION['owner_id'] );
                

                if (!isset($_SESSION['parts'])){
                    $_SESSION['parts']=array();
                $part=array('part_name'=>$request->input('part_name'),'condition'=>$request->input('condition_rec')
                ,'work'=>$request->input('work_performed'),'recommendiation'=>$request->input('recommendation')
                ,'price'=>$request->input('price'),'tagNumber'=>$request->input('tag_number'),"partNumber"=>$request->input('part_number')
                ,'quantity'=>$request->input('quantity'));
                array_push($_SESSION['parts'],$part);
                }else{
                    $part=array('part_name'=>$request->input('part_name'),'condition'=>$request->input('condition_rec')
                    ,'work'=>$request->input('work_performed'),'recommendiation'=>$request->input('recommendation')
                    ,'price'=>$request->input('price'),'tagNumber'=>$request->input('tag_number'),"partNumber"=>$request->input('part_number')
                    ,'quantity'=>$request->input('quantity'));
                    array_push($_SESSION['parts'],$part);
                }
                return 1;
            }
            catch(\Exception $e)
            {
                return $e;

            }

        }else{
            return redirect('/login');
        }
    }


    public function edit($id)
    {
        if(isset($_SESSION['id'])){

            $part=Parts::find($id);
            return view('parts.edit',compact('part'));

        }else{
            return redirect('/login');
        }
    }

    public function update(Request $request,$id)
    {
        if(isset($_SESSION['id'])){

            $part=Parts::find($id);
            if ($part){
            $part->tag_number = $request->input('tag_number');
            // $part->date = $request->input('date');
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
            $part->equipment_type = $request->input('equipment_type');
            //   return $request->input('equipment_type');
            $part->recommended_spare = $request->input('recommended_spare');
            $part->part_on_order = $request->input('part_on_order');
            $part->updated_by = $_SESSION['id'];
            $part->save();
           return 1;
            }else{
                return 0;
            }

        }else{
            return redirect('/login');
        }
    }
    public function destroy($id)
    {
        if(isset($_SESSION['id'])){

            $part=Parts::find($id);

            $part->delete();

            return redirect()->back()
                ->with("success", "part deleted successfully");
        }else{
            return redirect('/login');
        }
    }
}