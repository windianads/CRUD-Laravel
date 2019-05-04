<?php

namespace App\Http\Controllers;

//pertama kita panggil database yang sudah ditampung di model book yang pertama kali dibuat

use App\book;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();
        return view('tampil', compact('books')); //bingung ra maksude priwe
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create'); //wes ngene tok  men bisa tampil filecreate.e ya cek jal 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // kie gunane nggo validasi, men form.e kudu diisi, nek biasane nang biodata diri ana bintang abange kae sing wajib diisi (y)
        $request -> validate([
            'nama_buku' => 'required',
            'harga' => 'required|integer' //kie validasi men harga kudu diisi + harga kudu bentuke integer (y)
        ]);

        //membuat variable untuk membuat data baru, new book berasal dari model yang didefinisikan diatas
        $book = new book([ 
            'nama_buku' => $request->get('nama_buku'), // kuwe ngono nama_column nang database dicocokna karo nama nang form sing mau kan mau wes gawe name="blabalbla", yg nama buku ?yoy  trus sing nama_column deleng nang database
            'harga' => $request->get('harga') 
     ]);
        $book->save(); //untuk nyimpen ke database
        return redirect('/buku'); //wes jal coba ngisi data trus dicek nang database datane kesimpen ora
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = book::find($id);
        return view('edit', compact('post'));
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

        // oh iya validasi dulu

            $request -> validate([
            'nama_buku' => 'required',
            'harga' => 'required|integer'
            ]); //asem kebalik -_- apa

            $post = book::find($id);
            $post->nama_buku = $request->get('nama_buku');
            $post->harga = $request->get('harga');
            $post->save();
            return redirect('/buku');
            // doneee 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = book::find($id);
        $post->delete();
        return redirect('/buku');
    }
}
