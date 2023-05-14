<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::select()->paginate(5);
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $this->getRules();
        $image = $request->file('image');
        $file_extention = $image->getClientOriginalName();
        $file_name = \Str::random(20) . $file_extention;
        $path = 'images/category';
        $image->move($path, $file_name);
        Category::insert([
          'name' => $request->name,   
          'image' =>$file_name, 
        ]);
        return redirect()->route('Category/index')->with('success', __('messages.Added'));         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images=Image::select()->where('category_id',$id)->paginate(5);
        return view('admin.image.index',compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = $this->getRules();

        if($request->image==null)
        {
            $file_name=$request->old_image;
        }
        else
        {
            $image = $request->file('image');
            $file_extention = $image->getClientOriginalName();
            $file_name = \Str::random(20) . $file_extention;
            $path = 'images/category';
            $image->move($path, $file_name);
        }
        $category=Category::find($id)->update([
            'name'=>$request->name,
            'image' =>$file_name, 
        ]);
        return redirect()->route('Category/index')->with('success', __('messages.Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::findOrFail($id)->delete();
        return redirect()->route('Category/index')->with('success', __('messages.Deleted'));
    }

    protected function getRules()
    {
        $rules=[
            'name'=>['required','Max:100']
        ];
    }
}
