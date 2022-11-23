<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
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
        return view('organisation');
    }
}
