<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Design;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::insert([
            'comment' => $request->comment,
            'user_id' =>  Auth::user()->id,
            'design_id' => $request->design_id,
        ]);
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }  
}
