<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\City;
use App\Country;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class CityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function city_rules(array $data)
    {
        $messages = [
            'country_id.required' => "this country doesn't exist",
        ];
        $validator = Validator::make($data, [
            'name' => ['required','string','min:2','max:50'],
            'country_id' =>['required','exists:countries,id']
        ], $messages);
        return $validator;
    }
    public function edit_rules(array $data)
    {
        $messages = [
            'country_id.required' => "this country doesn't exist",
            'id.required' => "this city doesn't exist",
        ];
        $validator = Validator::make($data, [
            'name' => ['required','string','min:2','max:50'],
            'country_id' =>['required','exists:countries,id'],
            'id' =>['required','exists:cities,id']
        ], $messages);
        return $validator;
    }
    public function create(Request $request)
    {
        $validator = $this->city_rules($request->all());
        if($validator->fails())
            return Redirect::back()->withErrors($validator);
        $city=new City();
        $city->name=$request->name;
        $city->country_id=$request->country_id;
        $city->save();
        return redirect()->route('cities.index')->with('success','city created successfully');
    }
    public function delete(Request $request)
    {
        $city = City::find($request->id);
        if (is_null($city))
            return redirect()->route('cities.index')->with('success','city does not exist');
        $city->delete();
        return redirect()->route('cities.index')->with('success','city deleted successfully');
    }
    public function view($id)
    {
        $city=DB::table('cities')
            ->join('countries', 'countries.id', '=', 'cities.country_id')
            ->select('cities.name','cities.id', 'countries.name as country_name','countries.id as country_id')
            ->where('cities.id','=',$id)
            ->first();
        if (!$city)
            return redirect()->route('cities.index')->with('success','city does not exist');
        $countries=Country::all();
        return view('city.edit')->with('countries',$countries)->with('city',$city);

    }
    public function edit(Request $request)
    {
        $validator = $this->edit_rules($request->all());
        if($validator->fails())
            return Redirect::back()->withErrors($validator);
        $city = City::find($request->id);
        $city->name=$request->name;
        $city->country_id=$request->country_id;
        $city->save();
        return redirect()->route('cities.index')->with('success','city updated successfully');

    }
    public function select()
    {
        $cities=DB::table('cities')
            ->join('countries', 'countries.id', '=', 'cities.country_id')
            ->select('cities.name','cities.id', 'countries.name as country_name','countries.id as country_id')
            ->get();

        return view('city.index')->with('city',$cities);
    }
    public function show()
    {
        $countries=Country::all();
        return view('city.create')->with('countries',$countries);

    }


}
