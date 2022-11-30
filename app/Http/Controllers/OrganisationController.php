<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Organisation;
use Illuminate\Database\Query\Builder;
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
        $category_ids = request('cat_ids',[]);
        $organisation = Organisation::when(!empty($category_ids), function($q){
            $q->whereHas('categories', function($query){
                $query->whereIn('id', request('cat_ids'));
            });
        })->with('categories')
            ->get();
        return view('organisations.index')
            ->with('categories', $categories)
            ->with('organisation', $organisation)
            ->with('categories_id', $category_ids);
            
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
        $organisation = Organisation::with('categories')->find($id);
        $cat_ids = $organisation->categories->map(fn(Category $cat) => $cat->id)->toArray();
        $cat_ids[] = request('category_id');
        if($organisation->categories()->sync($cat_ids))
        {
            return redirect()->back()->with('message', 'succes');
        }
        return redirect()->back()->with('message', 'can\'t delete');
    }

    public function attach_category_api(Request $request){
        $category_name = request('category_name');
        $organisation_id = request('organisation_id');
        $category = Category::firstOrCreate([
            'name' => $category_name
        ]);
        $organisation = Organisation::with('categories')->findOrFail($organisation_id);
        $cat_ids = $organisation->categories->map(fn(Category $cat) => $cat->id)->toArray();
        $cat_ids[] = $category->id;
        if($organisation->categories()->sync($cat_ids))
        {
            return ['message'=> 'success'];
        }
        return ['message'=> 'failed'];
    }
}
