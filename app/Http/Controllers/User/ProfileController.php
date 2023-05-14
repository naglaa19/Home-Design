<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Design;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::select()->find($id);
        $design = Design::select()->where('user_id',$id)->get();
        $designs = Design::select()->where('user_id',$id)->get()->count();
        $comments = Comment::select()->where('user_id',$id)->get()->count();
        return view('user.profile.index',compact('design','user','designs','comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.profile.upload');
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
        $file_extention = $image->getClientOriginalName();
        $file_name = \Str::random(20) . $file_extention;
        $path = 'images/designs';
        $image->move($path, $file_name);

        Design::create([
             'name'=>$request->name,
             'image'=>$file_name,
             'user_id'=>Auth::user()->id,
        ]);

        // return redirect()->route('profile/index')->with('success', __('messages.Added'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.profile.edit',compact('user'));
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
        $path = 'images/profile';
        $image->move($path, $file_name);
        }

        User::find($id)->update([
            'image'=>$file_name,
            'name'=>$request->name,
             'email'=>$request->email,
             'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('profile/index')->with('success', __('messages.Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
