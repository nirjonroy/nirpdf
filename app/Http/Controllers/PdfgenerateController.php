<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use PDF;
use DB;

class PdfgenerateController extends Controller
{
     public function generatePDF(Request $r)
    {
    	
        $pdf = PDF::loadView('welcome');


        return $pdf->download('dcart.pdf');
    }
    public function Vieworder(){
    	// $all_categories_info= DB::table('categories')->get();
    	// $manage_categories = view('admin.all_categories')
    	// ->with('all_categories_info', $all_categories_info);
    	// return view('admin_layout')
    	// ->with('admin.all_categories', $manage_categories);
    	$all_categories_info = Category::all();
    	echo "<pre>";
    	print_r($all_categories_info);
    }
}
