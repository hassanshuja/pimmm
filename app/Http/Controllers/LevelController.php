<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BadgeLevel;
use Carbon\Carbon;

class LevelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create()
    {


        return view('level.create');
    }
    public function index()
    {

        $badgeLevels=BadgeLevel::all();


        return view('level.index',compact('badgeLevels'));
    }

    public function store(Request $request)
    {
        request()->validate([

            'level' => 'required|unique:badge_levels',
            'start' => 'required',
            'end' => 'required'

        ]);
        $badgeLevel= new BadgeLevel();
        $badgeLevel->level=$request->input('level');
        $badgeLevel->start=$request->input('start');
        $badgeLevel->end=$request->input('end');

        if ($request->file('photo') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('photo')->hashName());


            $request->file('photo')->storeAs(
                'public/attachment', $date .'.'. $ext[1]
            );
            $badgeLevel->photo = $date .'.'. $ext[1];


        }


        $badgeLevel->save();
        return redirect()
            ->route("level.index")
            ->with("success", "level created successfully ");

    }
    public function destroy($id)
    {
        $badgeLevel=BadgeLevel::find($id);
        $badgeLevel->delete();

        return redirect()
            ->route("level.index")
            ->with("success", "level deleted successfully");
    }

    public function edit($id)

    {

        $level=BadgeLevel::find($id);

        return view('level.edit',compact('level'));


    }
    public function tet()
    {

        $credentials = "Tammtest:Tam@18418756";
        $url = "http://www.w3.org/2005/08/addressing";
        $body = ''; /// Your SOAP XML needs to be in this variable

        $headers = array(
            'Content-Type: text/xml; charset="utf-8"',
            'Content-Length: '.strlen($body),
            'Accept: text/xml',
            'Cache-Control: no-cache',
            'Pragma: no-cache',
            'SOAPAction: "http://TekTravel/HotelBookingApi/CountryList"'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Stuff I have added
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, $credentials);
       // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Length: 0'));


        // converting
        $response = curl_exec($ch);
        dd($response);
        curl_close($ch);

        // converting
        $response1 = str_replace("<soap:Body>","",$response);
        $response2 = str_replace("</soap:Body>","",$response1);

        // convertingc to XML
        $parser = simplexml_load_string($response2);

    }

    public function update(Request $request,$id)

    {
        $level=BadgeLevel::find($id);

        if ($level->level!=$request->input('level')) {
            request()->validate([

                'level' => 'required|unique:badge_levels'
                ]);
        }


        $level->level=$request->input('level');
        $level->start=$request->input('start');
        $level->end=$request->input('end');




        $level->save();
        return redirect()
            ->route("level.index")
            ->with("success", "level updated successfully");


    }







}
