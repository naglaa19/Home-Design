<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;

class DesignController extends Controller
{
    public function index()
    {
        $design = Design::select()->paginate(5);
        return view('admin.design.index',compact('design'));
    }


    public function destroy($id)
    {
        $design=Design::findOrFail($id)->delete();
        return redirect()->route('Design/index')->with('success', __('messages.Deleted'));
    }
}
