<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Warranty;
use App\TransactionSellLine;
use App\Product;
use PDF;
use DB;
use DataTables;

class DisneyplusController extends Controller
{
    public function index()
{
        // $shows = TransactionSellLine::all();

        // return view('list', compact('shows'));
        $shows = DB::table('transactions')
            // ->join('transaction_sell_lines', 'transactions.id', 'transaction_sell_lines.id', )
            ->join('contacts', 'transactions.contact_id', 'contacts.id')
            ->select('transactions.*', 'contacts.name')->where('transactions.type', 'sell')
            ->latest()
            ->orderBy('id', 'desc')
            ->get();
        return view('list', compact('shows'));
        // return $shows;

}

    //  public function create()
    // {
    //     return view('form');
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'show_name' => 'required|max:255',
    //         'series' => 'required|max:255',
    //         'lead_actor' => 'required|max:255',
    //     ]);
    //     Disneyplus::create($validatedData);
   
    //     return redirect('/disneyplus')->with('success', 'Disney Plus Show is successfully saved');
    // }
    // DisneyplusController.php

public function downloadPDF1($id){
  
}

public function downloadPDF( $id) {
       
      $show = DB::table('transaction_sell_lines')
              ->join('transactions', 'transaction_sell_lines.transaction_id', 'transactions.id')
              ->join('products', 'transaction_sell_lines.product_id', 'products.id')
              ->select('transaction_sell_lines.quantity', 'transaction_sell_lines.unit_price', 'transaction_sell_lines.line_discount_amount', 'products.name as pname', 'transaction_sell_lines.unit_price_before_discount', 'transactions.shipping_charges')
              ->where('transactions.id', $id)
              ->get();

                    

      $cont = DB::table('transactions')
              ->join('contacts', 'transactions.contact_id', 'contacts.id')
              ->select('transactions.contact_id', 'transactions.id', 'contacts.name', 'transactions.invoice_no', 'transactions.transaction_date', 'contacts.shipping_address')
              ->where('transactions.id', $id)  
             ->groupBy('contacts.name')      
            ->get(); 
            $pdf = PDF::loadView('pdf', compact('show', 'cont'));
            return $pdf->download('Dcart.pdf');

            }
                
}
