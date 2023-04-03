<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class GlobalVariableController extends Controller
{
    public static function global()
    {
        $category = Category::select()->get();
        return $category;
    }
}
