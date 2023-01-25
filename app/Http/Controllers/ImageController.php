<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::select()->paginate(5);
        return view('image.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category =Category::select()->get();
        return view('image.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        // return $photo;

        $file_extention = $image->getClientOriginalName();
        $file_name = \Str::random(20) . $file_extention;
        $path = 'images/images';
        $image->move($path, $file_name);

        Image::create([
             'name'=>$request->name,
             'image'=>$file_name,
             'discreption'=>$request->discreption,
             'category_id'=>$request->category_id,
        ]);
        return redirect()->route('Image/index')->with('success', __('messages.Added'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image=Image::find($id);
        $category=Category::find($image->category_id);
        //return $categories;
        $cat=Category::select('id','name')->get()->except($category->id);
        return view('image.edit',compact('image','category','cat'));
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
        if($request->image==null){
            $file_name=$request->old_image;
        }else{
            $image = $request->file('image');
        // return $photo;

        $file_extention = $image->getClientOriginalName();
        $file_name = \Str::random(20) . $file_extention;
        $path = 'images/images';
        $image->move($path, $file_name);
        }

        Image::find($id)->update([
             'name'=>$request->name,
             'image'=>$file_name,
             'discreption'=>$request->discreption,
             'category_id'=>$request->category_id,
        ]);
        return redirect()->route('Image/index')->with('success', __('messages.Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=Image::find($id)->delete();
        return redirect()->route('Image/index')->with('success', __('messages.Deleted'));
    }
}
