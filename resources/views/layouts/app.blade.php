<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Biman Bangladesh Airlines | Notice listing page</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <div class="wrapper">
    @include('partial.header')
    @yield('content')
    <footer class="footer">
      <div class="container">
        <p class="text-muted">All Rights Reserved | Biman Bangladesh Airlines Ltd. {{date('Y')}}</p>
        <p class="text-muted">Developed By <a href="https://www.facebook.com/mchoncholm">Chonchol Mahmud</a></p>
      </div>
    </footer>
</div>
    <!-- JavaScripts -->
    <script src="{{URL::asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable( {
              "pagingType": "full_numbers"
          } );
      } );
    </script>
</body>
</html>
