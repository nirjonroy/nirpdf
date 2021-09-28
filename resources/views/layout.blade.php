<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dcart</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
 
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>