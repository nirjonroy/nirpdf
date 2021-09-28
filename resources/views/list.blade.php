<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
  <div style="width: 80%; margin-left: 10%; margin-top: 50px;">
    <h1 style="text-align: center">Invoice Informations</h1><br>
<table class="table table-striped" id="data-table" border="1px" style="width: 80%;" >
  <thead style="background: black; color: white; font-weight: bolder;">
    <th>Sl</th>
    <th>Customer Name</th>
    <th>Invoice No</th>
    <th>Payment Status</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($shows as $show)
    <tr>
      <td>{{$show->id}}</td>
      <td>{{$show->name}}</td>
     <td>{{$show->invoice_no}}</td>
     <td>{{$show->payment_status}}</td>
      <td><a href="{{action('DisneyplusController@downloadPDF', $show->id)}}" class="btn btn-success">Download PDF</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<script type="text/javascript">
  $(document).ready( function () {
    $('#data-table').DataTable(
      
      );
} );
</script>
  

</body>
</html>



