<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    public function store(Request $request)
    {
        Organisation::create($request->all());
        return redirect()->back()->with('message', 'created');
    }
    public function edit(Request $request, $id)
    {
        $organisation = Organisation::find($id);
        if($organisation->update([
            'legal_name' => request('legal_name'),
            'description' => request('description')
        ])){
            return redirect()->back()->with('message', 'succes');
        }
        return redirect()->back()->with('message', 'can\'t update');
    }

    public function index()
    {
        $organisation = Organisation::all();
        return view('organisations.index')->with('organisation', $organisation);
    }

    public function destroy($id)
    {
        if(Organisation::find($id)->delete())
        {
            return redirect()->back()->with('message', 'succes');
        }
        return redirect()->back()->with('message', 'can\'t delete');
    }
}
