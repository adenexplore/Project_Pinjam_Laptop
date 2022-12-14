<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    {{-- <script src="https://cdn.tiny.cloud/1/i62phsrg4132j4da2r91942mcx3wfzykskhlfuoqa7khhqn5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css"') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div class="container">   
        <main class="py-5">
            @yield('content')
        </main>
    </div>

 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
 <!-- Page level plugins -->
 <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
 <!-- Datatables -->

 <!-- Page level custom scripts -->
 <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
 <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
 <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>

 <!-- Custom styles for this page -->
 <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
 <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
 <script>
     $(document).ready(function() {
         $('#dataTable').DataTable();
     });
 </script>
 @yield('cjs')

</body>

</html>
