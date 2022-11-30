<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();
        $organisation = Organisation::with('categories')->get();
        return view('organisations.index')
            ->with('categories', $categories)
            ->with('organisation', $organisation);
    }

    public function destroy($id)
    {
        if(Organisation::find($id)->delete())
        {
            return redirect()->back()->with('message', 'succes');
        }
        return redirect()->back()->with('message', 'can\'t delete');
    }

    public function attach_category(Request $request, $id)
    {
        $organisation = Organisation::find($id);
        if($organisation->categories()->attach(request('category_id')))
        {
            return redirect()->back()->with('message', 'succes');
        }
        return redirect()->back()->with('message', 'can\'t delete');
    }
}
