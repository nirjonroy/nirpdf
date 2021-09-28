<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style type="text/css">
.tt {
  width: 100%;
  height: auto;
  border-radius: 10px;
}
}
</style>
  <title></title>
</head>
  <body>
    <div class="alert alert-secondary">
    <div class="col-md-6" style=" background: #fffff; margin:0px; padding: 0px;  ">
  <h5 class="display-5" style=" font-size:22px; font-family:Anton; text-align: left ">Invoice</h5>
  </div>
  <div class="col-md-3" style="margin-left: 50%; font:8px; padding: 1px; margin-top: -22px; text-align: right;">
      <p>Dcart, House # Ka-145/23/5 Flat # G1, <br>Nayanagor, Khilkhet, Dhaka, Bangladesh. M # +8801888685662 <br>
      </p>
  </div>
</div>
<hr>
<table class="table" >
    <tr>
      @foreach($cont as $cshow)
      <td class="col-md-4" style=" font-size: 10px"> Billed To :<br>
       {{$cshow->name}}<br>
       Address:<br>
       {{$cshow->shipping_address}}</td>
      <td class="col-md-4" style="text-align: left; font-size: 10px; ">Invoice No #<br>
       {{$cshow->invoice_no}}<br>
       Create date :<br>
       {{$cshow->transaction_date}}</td>
      <td style="text-align: right; margin-left:-20%;  width: 50%">
        @php $total = "0"; @endphp
        @php $total2 = "0"; @endphp
        @php $total3 = "0"; @endphp
        @php $you_saved = "0"; @endphp
        @php $delivery = "0"; @endphp
        @foreach($show as $pshow)
         @php $delivery = $pshow->shipping_charges @endphp
        @php $total = $total + ($pshow->unit_price_before_discount * $pshow->quantity)  @endphp
        @php $total2 = $total2 + ($pshow->unit_price * $pshow->quantity)  @endphp
        @php $total3 = $total - $total2  @endphp
        @php $you_saved = $total3 / $total * 100 @endphp
        @endforeach
<span style="font-size: 10px; font-weight: bold; text-align: center;">Total Payable <br> <span style="font-size: 14px">{{number_format($total2 + $delivery , 2)}}</span></span><br>
<span style="font-size: 10px; margin-top: -20px; font-weight: bold; text-align: center;">Total Save <br>{{number_format($you_saved, 2)}} %</span>
      </td>
    @endforeach
    </tr>
</table>
  
<hr>

    <table class="tt table-bordered " border="1px">
    <thead>
      <tr class="table-active " style="font-size: 12px; text-align: center;">
        <td>Product </td>
        <td>Quantity</td>   
        <td>Regular Price</td>
        <td>Offer Price</td>
        <td>Regular Total</td>
        <td>Offer Total</td>
      </tr>
      </thead>
      <tbody class="table-fit">
        @php $total = "0"; @endphp
        @php $total2 = "0"; @endphp
        @php $total3 = "0"; @endphp
        @php $you_saved = "0"; @endphp
        @php $delivery = "0"; @endphp
        @foreach($show as $pshow)
        <tr style="font-size: 10px; ">
          <td>{{$pshow->pname}}</td>
          <td style="text-align: right;">{{number_format($pshow->quantity, 2)}}</td>
          <td style="text-align: right;">{{number_format($pshow->unit_price_before_discount, 2)}}</td>
          <td style="text-align: right;">{{number_format($pshow->unit_price, 2)}}</td>
          <td style="text-align: right;">{{number_format($pshow->unit_price_before_discount * $pshow->quantity, 2)}}</td>
          <td style="text-align: right;">{{number_format($pshow->unit_price * $pshow->quantity, 2)}}</td>  
        </tr>
        
            
        
        @php $delivery = $pshow->shipping_charges @endphp
        @php $total = $total + ($pshow->unit_price_before_discount * $pshow->quantity)  @endphp
        @php $total2 = $total2 + ($pshow->unit_price * $pshow->quantity)  @endphp
        @php $total3 = $total - $total2  @endphp
        @php $you_saved = $total3 / $total * 100 @endphp
        @endforeach
        <tr class="" style="font-size: 10px; font-weight: bolder;">
          <td colspan="4">Subtotal</td>
          <td style="text-align: right;">
            {{number_format($total, 2)}}
          </td>
          

          <td style="text-align: right; font-weight: bolder;">
            {{number_format($total2, 2)}}
          </td>
        </tr>
        
       
        <tr style="font-size: 10px; font-weight: bolder;">
          <td colspan="4">You saved</td>
          <td style="text-align: right;"> {{number_format($you_saved, 2)}} %</td>
          <td style="text-align: right;">
            {{number_format($total3, 2)}}
          </td>
        </tr>
         <tr style="font-size: 10px; font-weight: bolder;">
          <td colspan="5">Delivery Fee</td>

          <td style="text-align: right; font-weight: bolder;">
            {{number_format($delivery, 2)}}
          </td>
        </tr>
        
        <tr style="font-size: 10px; font-weight: bolder;">
            <td colspan="5">Total Payable</td>
            <td style="text-align: right;">
              {{number_format($total2 + $delivery, 2)}}
            </td>
          </tr>
      </tbody>
      
    </table>

  </body>
</html>