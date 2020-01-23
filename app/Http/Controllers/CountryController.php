<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Country;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class CountryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function create_validate(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'name' => ['required','string', 'unique:countries','min:2','max:50'],

        ], $messages);

        return $validator;
    }
    public function edit_validate(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'id.required' => "this country doesn't exist",
        ];

        $validator = Validator::make($data, [
            'name' => ['required','string', 'unique:countries','min:2','max:50'],
            'id' =>['required','exists:countries,id']

        ], $messages);

        return $validator;
    }
    public function create(Request $request)
    {
        $validator = $this->create_validate($request->all());
        if($validator->fails())
            return Redirect::back()->withErrors($validator);
        $country=new Country();
        $country->name=$request->name;
        $country->save();
        return redirect()->route('countries.index')->with('success','country created successfully');

    }
    public function delete(Request $request)
    {
        $country = Country::find($request->id);
        if (is_null($country))
            return redirect()->route('countries.index')->with('success','country does not exist');
        $country->delete();
        return redirect()->route('countries.index')->with('success','country deleted successfully');

    }
    public function view($id)
    {
        $country = Country::find($id);
        if (is_null($country))
            return redirect()->route('countries.index')->with('success','country does not exist');
        return view('country.edit')->with('country',$country);
    }
    public function edit(Request $request)
    {

        $country = Country::find($request->id);

        $validator = $this->edit_validate($request->all());
        if($validator->fails())
            return Redirect::back()->withErrors($validator);

        $country->name=$request->name;
        $country->save();
        return redirect()->route('countries.index')->with('success','country updated successfully');


    }
    public function select()
    {
        $countries=Country::all();
        return view('country.index')->with('countries',$countries);

    }

}
