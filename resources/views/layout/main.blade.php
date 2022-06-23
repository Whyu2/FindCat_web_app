<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <!--Template based on URL below-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" />
    <!-- Place your stylesheet here-->

</head>

<body>
    @include('sweetalert::alert')
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand logo1" href="\home">FindCat <img src="{{ asset('img\logo2.png') }}" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <div class="nav-item dropdown ms-auto">
            <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action text-white"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu">
                <a href="/user" class="dropdown-item"><i class="fas fa-user fa-fw"></i> Profile</a>
                <a href="/list_post" class="dropdown-item"><i class="fas fa-clipboard-list"></i> List Post </a>
                <a href="/tambah_post" class="dropdown-item"><i class="fas fa-edit"></i> Tambah Post </a>
                <a href="/inbox" class="dropdown-item"><i class="fas fa-inbox"></i> Inbox</a>
                <a href="/logout" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
        
        {{-- <ul class="navbar-nav mr-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-user fa-fw"></i></a>
            </li>
           
        </ul> --}}
       
    </div>
</nav>
@yield('container')

<footer class="py-4 bg-dark mt-auto">
    <div class="container-fluid px-4">
      <div
        class="d-flex align-items-center justify-content-between small text-white"
      >
      <div class="text-muted ">Copyright © 2022 FindCat</div>
      </div>
    </div>
  </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
</body>

<script>
    $('.delete').click(function(){
        var id_post = $(this).val();
        swal({
  title: "Yakin hapus ?",
  text: "Data dihapus secara permanen!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/delete/"+id_post+""
    swal("Data berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Tidak dihapus");
  }
});
    });

</script>
</html>