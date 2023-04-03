<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\QASection;
use Illuminate\Http\Request;

class FAQController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = FAQ::select()->paginate(5);
        return view('admin.faq.index',compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section =QASection::select()->get();
        return view('admin.faq.create',compact('section'));
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

        FAQ::insert([
            'question' => $request->question,
            'answer' => $request->answer,
            'section_id' => $request->section_id
        ]);
        return redirect()->route('FAQ/index')->with('success', __('messages.Added'));       
    
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq=FAQ::find($id);
        $section=QASection::find($faq->section_id);
        //return $categories;
        $qa=QASection::select('id','name')->get()->except($section->id);
        return view('admin.faq.edit',compact('faq','section','qa'));
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
        
        $faq=FAQ::find($id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'section_id' => $request->section_id
        ]);
        return redirect()->route('FAQ/index')->with('success', __('messages.Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq=FAQ::findOrFail($id)->delete();
        return redirect()->route('FAQ/index')->with('success', __('messages.Deleted'));
    }
    
    protected function getRules()
    {
        $rules=[
            'question'=>['required','Max:100'],
            'answer'=>['required','Max:255']
        ];
    }
}
