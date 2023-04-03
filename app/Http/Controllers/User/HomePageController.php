<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FAQ;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $category = Category::select()->get();
        $image = Image::select()->get();
        $user = User::select()->get();
        $faq=FAQ::select()->get();
        return view('layouts.layout',compact('category','image','user','faq'));
    }
  
    public function show($id)
    {
        $category = Category::select()->get();
        $image = Image::select()->where('category_id',$id)->get();
        return view('user.category',compact('image','category'));
    }

    
}
