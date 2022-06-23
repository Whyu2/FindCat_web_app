@extends('layout/main')
@section('container')
    <main role="main" class="container">
    
        <div class=" mt-5 pt-5">
            <div class="row">
                <div class="col-md-4 mb-4  card2 mx-auto  bg-white text-dark">
   
              <div class="row">
                <div class="col">
                   <h2 class="text-center">LIST POSTINGAN </h2>
             
                </div>
              
              </div>
     
                       
               
            </div>
            <div class="row">
                @foreach ($posts as $key => $m)
             
            <div class="col-xl-3 mb-4 col-md-6">
             
                <div class="card card2">
                    <img src="{{ asset('img/kuceng.jpg') }}" class="img-rounded p-1 "  alt="...">
                  <div class="card-body">
                    <a href="{{route('show',$m['id'])}}">
                    <h4 class="text-danger">{{$m['nama']}}</h4></a>
                    <div class="row">
            
                    <div class="col-7 mt-3">
                        <i class="fas fa-map-marker-alt"></i> {{$m['daerah']}}
                    </div>
                    <div class="col-5 mt-3">
                        @php
                        $lama = $c_posts->lama($m['tgl_hilang'],$now_date);
                       @endphp
                    
                        <p class="text-secondary">{{$lama}} hari lalu</p> 
                    </div>
            
                    </div>
                    <a class="btn card2" type="submit" >Edit</a>
                    {{-- <a  class="btn card2 delete" value="{{$m['id']}}"  id="{{$m['id']}}">Hapus</a> --}}
                    <button type="button" value="{{$m['id']}}"  class="btn card2 delete">Hapus</button>
                </div>
               
              </div>
            </div>
            
            @endforeach
            
              
            <div class="col-xl-3  col-md-6">
              <div class="col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
              <div class="card card2 mx-auto text-center mt-5 mb-5">
              
                <a href="/tambah_post" type="submit" ><i class="fas fa-plus fa-9x text-dark"></i></a>
              </div>
          </div>
           
           
            
            
          
        </div>
            

    </main><!-- /.container -->
    @endsection