<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::select()->paginate(5);
        return view('admin.comment.index',compact('comment'));
    }

    public function destroy($id)
    {
        $comment=Comment::findOrFail($id)->delete();
        return redirect()->route('comment/index')->with('success', __('messages.Deleted'));
    }
}
