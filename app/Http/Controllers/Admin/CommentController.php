<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($id)
    {
        // $user = User::select()->find($id);
        // $design = Design::select()->where('user_id',$id)->get();
        // $designs = Design::select()->where('user_id',$id)->get()->count();
        // $comments = Comment::select()->where('user_id',$id)->get()->count();
        // $comment = Comment::select()->paginate(5);
        return view('admin.comment.index',compact('comment'));
    }

    public function destroy($id)
    {
        $comment=Comment::findOrFail($id)->delete();
        return redirect()->route('comment/index')->with('success', __('messages.Deleted'));
    }
}
