<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FAQ;
use App\Models\QASection;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function show($id)
    {
        // $category = Category::select()->get();
        $section = QASection::select()->get();
        $faq = FAQ::select()->where('section_id',$id)->get();
        return view('user.faq',compact('faq','section'));
    }

    public function allQA()
    {
        $section = QASection::select()->get();
        $faq = FAQ::select()->get();
        return view('user.faq',compact('faq','section'));
    }
}
