<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use DB;
use App\Settings;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function rules(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'campaign_escrow_held' => ['required','numeric', 'lte:1','gte:0'],
            'user_escrow_percent' => ['required','numeric', 'lte:1','gte:0'],
            'campaign_escrow_percent' => ['required','numeric', 'lte:1','gte:0'],

            'user_escrow_value' => ['required','numeric','gte:0'],
            'campaign_escrow_value' => ['required','numeric','gte:0'],
            'campaign_featured_value' => ['required','numeric','gte:0'],

            'currency_id' => ['required','int', 'exists:currencies,id'],

            'points_for_account' => ['required','int', 'lte:1000000','gte:0'],
            'points_for_friends' => ['required','int', 'lte:1000000','gte:0'],



        ], $messages);

        return $validator;
    }

    public function view()
    {
        $settings = Settings::all()[0];
        if (is_null($settings))
            return Redirect::back();
        $currencies=Currency::all();
        return view('settings.edit')->with('settings',$settings)->with('currencies',$currencies);
    }
    public function edit(Request $request)
    {
        $settings = Settings::find(1);
        $validator = $this->rules($request->all());
        if($validator->fails())
            return Redirect::back()->withErrors($validator);

        $settings->campaign_escrow_held=$request->campaign_escrow_held;
        $settings->user_escrow_percent=$request->user_escrow_percent;
        $settings->campaign_escrow_percent=$request->campaign_escrow_percent;
        $settings->user_escrow_value=$request->user_escrow_value;
        $settings->campaign_escrow_value=$request->campaign_escrow_value;
        $settings->campaign_featured_value=$request->campaign_featured_value;
        $settings->currency_id=$request->currency_id;
        $settings->points_for_account=$request->points_for_account;
        $settings->points_for_friends=$request->points_for_friends;

        $settings->save();
        return redirect()->route('settings.index')->with('success','settings updated successfully');

    }
    public function select()
    {
        $settings=DB::table('settings')
            ->join('currencies','settings.currency_id', '=','currencies.id')
            ->select('settings.*','currencies.id as currency_id','currencies.name')
            ->get();
        if (!$settings)
            return Redirect::back();

        return view('settings.index')->with('settings',$settings[0]);

    }

}
