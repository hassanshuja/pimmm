<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Currency;

class CurrencyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create()
    {


        return view('currency.create');
    }
    public function index()
    {

        $currencies=Currency::all();


        return view('currency.index',compact('currencies'));
    }

    public function store(Request $request)
    {
        request()->validate([

            'name' => 'required|unique:currencies',
            'symbol' => 'required|unique:currencies'

        ]);
        $currency= new Currency();
        $currency->name=$request->input('name');
        $currency->symbol=$request->input('symbol');


        $currency->save();
        return redirect()
            ->route("currency.index")
            ->with("success", "currency created successfully ");

    }
    public function destroy($id)
    {
        $currency=Currency::find($id);
        $currency->delete();

        return redirect()
            ->route("currency.index")
            ->with("success", "currency deleted successfully");
    }

    public function edit($id)

    {

        $currency=Currency::find($id);

        return view('currency.edit',compact('currency'));


    }

    public function update(Request $request,$id)

    {
        $currency=Currency::find($id);

        if ($currency->name!=$request->input('name')) {
            request()->validate([

                'name' => 'required|unique:currencies'
            ]);
        }
        if ($currency->symbol!=$request->input('symbol')) {
            request()->validate([

                'symbol' => 'required|unique:currencies'
            ]);
        }

        $currency->name = $request->input('name');
        $currency->symbol = $request->input('symbol');




        $currency->save();
        return redirect()
            ->route("currency.index")
            ->with("success", "currency updated successfully");


    }

    public function delete(Request $request)
    {
        $city = City::find($request->id);
        if (is_null($city))
            return;
        $city->delete();
    }





}
