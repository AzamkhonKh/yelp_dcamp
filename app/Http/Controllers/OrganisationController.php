<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
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
        $update = [
            'legal_name' => request('legal_name'),
            'description' => request('description'),
        ];
        $old_file_name = null;
        if($request->hasFile('logo'))
        {
            $ext = $request
                ->file('logo')
                ->extension();
            $file_name = str_replace(' ', '_', $organisation->legal_name).'_logo_'.time().'.'.$ext;
            $update['logo'] = $request
                ->file('logo')
                ->storeAs(
                    'organisations/logo', 
                    $file_name,
                    'public'
                );
            $old_file_name = $organisation->logo;
            $old_logo_path = storage_path('app/public/').$old_file_name;
        }
        if($organisation->update($update)){
            if(!is_null($old_file_name) && file_exists($old_logo_path))
            {
                unlink($old_logo_path);
            }
            return redirect()->back()->with('message', 'succes');
        }
        unlink(storage_path('app/public/').$file_name);
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

    public function add_comment(Request $request)
    {
        $comment = Comment::create([
            'text' => request('text'),
            'username' => request('username'),
            'rate' => request('rate'),
            'user_id' => request('user_id'),
            'organisation_id' => request('organisation_id'),
            'parent_comment_id' => request('parent_comment_id')
        ]);
        if(!empty($comment))
        {
            $rendered = view('organisations.comment', ['comment'=> $comment])->render();
            return ['message'=> 'success', 'html' => $rendered];
        }
        return ['message'=> 'failed'];
    }

    public function upload_image(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->storeAs('organisations/description', $fileName);
    
            $url = asset('storage/organisations/description/'.$fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
