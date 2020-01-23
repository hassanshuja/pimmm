<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/18/2019
 * Time: 4:58 PM
 */

namespace App\Http\Controllers;
use App\EntryType;
use Illuminate\Http\Request;

class EntrytypeController extends Controller
{
    public function create()
    {
        if(isset($_SESSION['id'])){
        return view('entryType.create');
        }else{
            return redirect('/login');
        }
    }

    public function index()
    {
        if(isset($_SESSION['id'])){
            $entries=EntryType::all();
        return view('entryType.index',compact('entries'));
        }else{
            return redirect('/login');
        }
    }


    public function store(Request $request)
    {
        if(isset($_SESSION['id'])){
            $entry= new EntryType();
            $entry->name=$request->input('name');
            $entry->created_by=($_SESSION['id']);
            $entry->save();
        return redirect()
            ->route("entryType.index")
            ->with("success", "Entry Type created successfully");
        }else{
            return redirect('/login');
        }

    }


    public function edit($id)

    {
        if(isset($_SESSION['id'])){

        $entry=EntryType::find($id);

        return view('entryType.edit',compact('entry'));

        }else{
        return redirect('/login');
        }


    }

    public function update(Request $request,$id)

    {
        if(isset($_SESSION['id'])){

        $entry=EntryType::find($id);
        $entry->name=$request->input('name');
        $entry->updated_by=($_SESSION['id']);
        $entry->save();
        return redirect()
            ->route("entryType.index")
            ->with("success", "Entry Type updated successfully");

            return view('entryType.edit',compact('entry'));

        }else{
            return redirect('/login');
        }
    }
    public function destroy($id)
    {
        if(isset($_SESSION['id'])){

            $entry=EntryType::find($id);

        $entry->delete();

        return redirect()
            ->route("entryType.index")
            ->with("success", "Entry Type deleted successfully");
        }else{
            return redirect('/login');
        }
    }
}