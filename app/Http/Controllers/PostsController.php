<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Posts;
use Alert;
use Illuminate\Support\Facades\Http;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->posts = new Posts();
    }
    public function index()
    {
        return view('tambah_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post=http::post('http://localhost:3000/posts',[
            'nama' => $request->nama,
            'id_hewan' => 'tess',
            'daerah' => $request->daerah,
            'tgl_hilang' => $request->tgl_hilang,
            'lokasimap' => $request->map,
            'jenis' => $request->jenis,
            'kelamin' => $request->kelamin,
            'informasi' => $request->informasi
        ]);

        //  return redirect('/home');
        Alert::success('Sukses', 'Post berhasil ditambah');
         return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show()
    {
        $post=http::get('http://localhost:3000/posts')->json();
        $posts = collect($post);
        $d = Carbon::now()->format('Y-m-d H:i:s');
        $data = [
        'posts' => $posts,
        'c_posts' => $this->posts,
        'now_date' => $d
    ];
    return view('list_post', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  
        $apiURL = 'http://localhost:3000/posts/'. $id;
        $response = Http::delete($apiURL);
        return redirect('/list_post');
    }
}
