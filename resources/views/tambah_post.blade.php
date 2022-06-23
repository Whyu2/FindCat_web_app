@extends('layout/main')
@section('container')

    <main role="main" class="container">
    
        <div class=" mt-5  pt-5">
            <div class="row">
            
            <div class="col mb-4">

    <div class="col-md-8 mt-3 card card2 mx-auto  bg-danger text-white">
   
        <div class="col p-3 ">
            <div class="col"><h4 for=""><h1>Tambah Postingan</h1></div>
        </div>
    </div>
    <div class="col-md-8 mt-1 card card2 mx-auto  bg-white text-dark">
   
        <div class="col p-3 ">
            <div class="col"><h3>Deskripsi</h3>

                <form action="/post/store" method="post">
                    @csrf
                    <div class="flex-rev">
                        <input type="text" placeholder="Masukkan si kucing, misal yanto, sigundul, paijo dll" name="nama" id="name" />
                        <label for="name">Nama</label>
                    </div>
                    <div class="flex-rev">
                        <input type="text" placeholder="Masukkan dearah hilangnya" name="daerah" id="daerah" />
                        <label for="daerah">Daerah</label>
                    </div>
                    <div class="flex-rev">
                        <input type="text" placeholder="Masukkan lokasi map" name="map" id="map" />
                        <label for="map">Lokasi Map</label>
                    </div>
                    <div class="flex-rev">
                        <input type="date" placeholder="Tanggal hilang" name="tgl_hilang" id="tgl_hilang" />
                        <label for="tgl_hilang">Tanggal Hilang</label>
                    </div>
                    <div class="flex-rev">
                        <input type="text" placeholder="Jenis kucing" name="jenis" id="jenis" />
                        <label for="jenis">Jenis</label>
                    </div>
                    <div class="flex-rev">
                        <input type="text" placeholder="Kelamin kucing" name="kelamin" id="kelamin" />
                        <label for="kelamin">Jenis Kelamin</label>
                    </div>
    
                    <div class="flex-rev">
                        <textarea placeholder="Informasi terakhir / ciri - ciri khusus" name="informasi" id="informasi" /></textarea>
                        <label for="informasi">Informasi</label>
                    </div>
                    <button type="submit" >Post</button>
                </form>
            </div>
        </div>
    </div>




         
            </div>
            
 
          
            
          
        </div>
            

    </main><!-- /.container -->

    @endsection