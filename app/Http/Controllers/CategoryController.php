<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function list(){
        $category = DB::table('sanpham')->get();
        return view('admin.categories.index',compact('category'));
    }
}
