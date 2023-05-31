<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\scanDesign;
use Illuminate\Http\Request;

class scanDesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $design=scanDesign::select()->paginate(5);
        return view('admin.app.index',compact('design'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.app.create');
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
        $path = 'images/scan';
        $image->move($path, $file_name);
        scanDesign::insert([
          'name' => $request->name,   
          'image' =>$file_name, 
        ]);
        return redirect()->route('app/index')->with('success', __('messages.Added'));         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $design=scanDesign::find($id);
        return view('admin.app.edit',compact('design'));
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
            $path = 'images/scan';
            $image->move($path, $file_name);
        }
        $design=scanDesign::find($id)->update([
            'name'=>$request->name,
            'image' =>$file_name, 
        ]);
        return redirect()->route('app/index')->with('success', __('messages.Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $design=scanDesign::findOrFail($id)->delete();
        return redirect()->route('app/index')->with('success', __('messages.Deleted'));
    }

    protected function getRules()
    {
        $rules=[
            'name'=>['required','Max:100']
        ];
    }
}
