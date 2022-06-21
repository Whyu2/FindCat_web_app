@extends('layout/main')
@section('container')
    <main role="main" class="container">
    
        <div class=" mt-5 pt-5">
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
                 
                </div>
              </div>
            </div>
            
            @endforeach
          
            
          
        </div>
            

    </main><!-- /.container -->
    @endsection