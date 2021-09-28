<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
class InvoiceController extends Controller
{
    public function index(){
    	return view('welcome');
    }
      public function all_categories(){
    	$all_categories_info= DB::table('categories')->get();
    	$manage_categories = PDF::loadView('admin.all_categories')
    	->with('all_categories_info', $all_categories_info);
    	return view('admin_layout')
    	->with('admin.all_categories', $manage_categories);



    }
}
