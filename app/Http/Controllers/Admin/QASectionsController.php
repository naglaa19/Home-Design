<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\QASection;
use Illuminate\Http\Request;

class QASectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = QASection::select()->paginate(5);
        return view('admin.section.index',compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section.create');
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

        QASection::insert([
            'name' => $request->name,     
        ]);
        return redirect()->route('section/index')->with('success', __('messages.Added'));        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq=FAQ::select()->where('section_id',$id)->paginate(5);
        return view('admin.faq.index',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section=QASection::find($id);
        return view('admin.section.edit',compact('section'));
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

        $section=QASection::find($id)->update([
            'name'=>$request->name,
        ]);
        return redirect()->route('section/index')->with('success', __('messages.Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section=QASection::findOrFail($id)->delete();
        return redirect()->route('section/index')->with('success', __('messages.Deleted'));
    }

    protected function getRules()
    {
        $rules=[
            'name'=>['required','Max:100']
        ];
    }
}
