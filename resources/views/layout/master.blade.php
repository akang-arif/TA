<!Doctype html>
<html lang="en">

<head>
  <title>Rapot Online || SMK</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{asset ('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset ('admin/assets/vendor/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset ('admin/assets/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset ('admin/assets/vendor/linearicons/style.css')}}">
  <link rel="stylesheet" href="{{asset ('admin/assets/vendor/linearicons/footer.css')}}">
  {{-- <link rel="stylesheet" href="{{asset ('admin/assets/vendor/bootstrap/css/bootstrap.css.map')}}"> --}}
  
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset ('admin/assets/css/main.css')}}">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  {{-- TOSTER --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
@include ('layout.include._navbar')
    <!-- LEFT SIDEBAR -->
@include ('layout.include._sidebar2')
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    @yield('content')
    <!-- END MAIN -->
    <div class="clearfix"></div>
    
@include('layout.include._footer')
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  <script src="{{asset ('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset ('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset ('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset ('admin/assets/scripts/klorofil-common.js')}}"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

@yield('footer')
</body>

</html>
