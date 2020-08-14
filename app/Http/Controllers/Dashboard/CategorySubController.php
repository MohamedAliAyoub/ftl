<?php

namespace App\Http\Controllers\Dashboard;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class CategorySubController extends Controller
{
    public function index(Request $request)
    {
        $sub_categories = SubCategory::with('category')->when($request->search, function ($q) use ($request) {

            return $q->where('name', 'Like','%' . $request->search . '%');

        })->latest()->paginate(5);
       

        return view('dashboard.sub_categories.index', compact('sub_categories','categories'));

    }//end of index


    

    public function create()
    { 
        $categories = Category::get(); 
        return view('dashboard.sub_categories.create',compact('categories'));

    }//end of create

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);
        SubCategory::create($request->all());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('sub_categories.index');

    }//end of store

    public function edit(SubCategory $sub_category)
    {
        $categories = Category::get(); 
        return view('dashboard.sub_categories.edit', compact('sub_category', 'categories'));

    }//end of edit

    public function update(Request $request, SubCategory $sub_category)
    {
       $request->validate([
            'name' => 'required',
            'category_id' => 'required',

        ]);
        $sub_category->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('sub_categories.index');

    }//end of update

    public function destroy(SubCategory $sub_category)
    {
        $sub_category->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('sub_categories.index');

    }//end of destroy

}//end of controller
