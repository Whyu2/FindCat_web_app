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

                <form action="">
                    <div class="flex-rev">
                        <input type="text" placeholder="Masukkan si kucing, misal yanto, sigundul, paijo dll" name="name" id="name" />
                        <label for="name">Nama</label>
                    </div>
                    <div class="flex-rev">
                        <input type="email" placeholder="Masukkan jenis" name="email" id="email" />
                        <label for="email">Jenis</label>
                    </div>
    
                    <div class="flex-rev">
                        <textarea placeholder="Informasi terakhir / ciri - ciri khusus" name="message" id="message" /></textarea>
                        <label for="message">Informasi</label>
                    </div>
                    <button>Post</button>
                </form>
            </div>
        </div>
    </div>




         
            </div>
            
 
          
            
          
        </div>
            

    </main><!-- /.container -->

    @endsection