<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="AdminKit">
        <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="img/pic/LOGORMUTK.png">
    
        {{-- <title>ระบบติดตามงาน</title> --}}
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/multi_select.css"> 
        <link rel="stylesheet" href="css/csstablesiza.css"> 
      <!--   <link rel="stylesheet" href="css/login.css"> -->
        <link rel="stylesheet" href="css/modal_Profile.css">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    
        <!-- Bootstrap 5.2  -->
         <!-- <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" /> -->
         <!-- Bootstrap 5.3  -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> 
         
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css"> -->
        <!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
        
        <!-- data table -->
         <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
        
    <!-- input flie -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
      
        <link href="css/app.css" rel="stylesheet">
        

</head>
<body>
  @include('auth.sidebar')
<div class="container">
    @yield('content')
   
</div>

<!-- Add your JavaScript scripts here -->

<script src="js/tricks.js"></script> 
 <script src="js/app.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- // js bootstrap -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script> -->

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 

<!-- multi_select -->
 <script src="js/multi_select.js"></script> 
<!-- datatable -->
 <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script> 

  
 <!-- input file -->
 <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
  

</body>
</html>
