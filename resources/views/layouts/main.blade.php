 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>{{ $title }}</title>

     {{-- CSS Font Awesome / Icon --}}
     <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
     <link rel="stylesheet" href="fontawesome/css/solid.css">
     <link rel="stylesheet" href="fontawesome/css/regular.css">



     {{-- CSS Bootstrap --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">



     {{-- MyCSS --}}
     <link rel="stylesheet" href="assets/css/style.css">



     {{-- Script --}}
     <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
     <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 </head>

 <body>
     <main class="d-flex">
         @include('layouts.sidebar')
         @include('layouts.navbar')

     </main>

     @if (session('log'))
         <script>
             Swal.fire({
                 //  position: 'top-end',
                 icon: 'success',
                 title: 'Login Sukses',
                 showConfirmButton: false,
                 timer: 1750
             })
         </script>
     @endif
     @if (session('daftar'))
         <script>
             Swal.fire({
                 //  position: 'top-end',
                 icon: 'success',
                 title: 'Pendaftaran Berhasil',
                 showConfirmButton: false,
                 timer: 1750
             })
         </script>
     @endif
     <script src="assets/js/script.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
     </script>
 </body>

 </html>
