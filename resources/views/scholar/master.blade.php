<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Scholarships Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/main.css')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/propeller.min.css')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/propeller-theme.css')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/propeller-admin.css')}}"></script>
    <!-- Select css -->
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/select2/pmd-select2.css')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/select2/select2-bootstrap.css')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/select2/select2.min.css')}}"></script>
    <!-- checkbox css -->
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/checkbox/checkbox.css')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/navbar/navbar.css')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/propeller/button/button.css')}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{url('css/propeller/slidebar/slidebar.css')}}"></script> -->
    <!-- Styles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{url('js/init.js')}}"></script>
    <script src="{{url('js/propeller/propeller.js')}}"></script>
    <script src="{{url('js/propeller/propeller.min.js')}}"></script>
    <!-- <select js> -->
    <script src="{{url('js/propeller/select2/pmd-select2.js')}}"></script>
    <script src="{{url('js/propeller/select2/select2.full.js')}}"></script>
    <!-- checkbox js-->
    <script src="{{url('js/propeller/checkbox/checkbox.js')}}"></script>
    <script src="{{url('js/propeller/navbar/navbar.js')}}"></script>
    <script src="{{url('js/propeller/button/ripple-effect.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="{{url('node_modules/sweetalert/dist/sweetalert.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- <script src="{{url('js/propeller/slidebar/slidebar.js')}}"></script> -->
    <!-- <script src="/js/app.js"></script> -->
    <!-- script -->
    @yield('js')
  </head>

  <body>
    <div class="container-fluide">
      <img src="https://www.internetcreation.net/wp-content/uploads/2015/04/banner-web-design.png" style='width:100%;' border="0" alt="Null">
      <!-- <div class="jumbotron">
        <h1>Scholarships Project</h1>
      </div> -->
    </div>
    <div class="container">
      <div class="page-header">
        <ul class="nav nav-pills pmd-navbar pmd-z-depth">
          <li><a class="pmd-ripple-effect" href="/scholar">All Post</a></li>
          <li><a class="pmd-ripple-effect" href="#">ทุนในประเทศ</a></li>
          <li role="presentation"><a href="#">ทุนต่างประเทศ</a></li>
        </ul>
        @yield('header')
      </div>

      @yield('content')
    </div>
  <!-- <section id="footer"> -->
      <div class="panel-footer" style="background-color:#00b8e6 ; border:3px solid #00b8e6"><center><font color="FFFFFF">Scholarships Project test footer <center>
        <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
      </div>
  <!-- </section> -->
  </body>
</html>
