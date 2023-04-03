<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Design;
use App\Models\User;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        $design=Design::select()->get();
        return view('user.designs',compact('design'));
    }

    public function show($id)
    {
        $user_id = User::select()->get();
        $design = Design::select()->find($id);
        $comment = Comment::select()->where('design_id',$id)->orWhere('user_id',$user_id)->get();
        $comments_count = Comment::select()->where('design_id',$id)->get()->count();
        // $commenter = Comment::select()->where('user_id',$user_id)->get();
        return view('user.comments',compact('design','comments_count','comment'));
    }
}
