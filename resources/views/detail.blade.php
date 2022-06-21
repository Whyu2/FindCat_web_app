@extends('layout/main')
@section('container')

    <main role="main" class="container">
    
        <div class=" mt-5  pt-5">
            <div class="row">
            
            <div class="col mb-4">
<div class="col-md-6 card card2 mx-auto bg-white">
    <div class="col mb- p-2">
        <img src="{{ asset('img/kuceng.jpg') }}" class="img3"  alt="...">
    </div>
 
   
    </div>
    <div class="col-md-6 mt-3 card card2 mx-auto  bg-danger text-white">
    <div class="row">
        <div class="col p-3 ">
            <div class="col"><h4 for=""><h1>ID Kuceng : {{$posts['id']}}</h1></div>
                <hr>
            <div class="col"><h4 for="">Nama : {{$posts['nama']}}</h4></div>
            <div class="col"><h4 for="">Jenis : {{$posts['jenis']}}</h4></div>
            <div class="col"><h4 for="">Kelamin : {{$posts['kelamin']}}</h4></div>
            <div class="col"><h4 for="">Tanggal Hilang : {{$posts['kelamin']}}</h4></div>
        </div>
    </div>
  
</div>




         
            </div>
            
 
          
            
          
        </div>
            

    </main><!-- /.container -->

    @endsection