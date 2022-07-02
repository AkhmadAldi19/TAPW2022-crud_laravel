<?php

namespace App\Http\Controllers;

use App\Models\datakantin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // fungsi halaman utama
    public function index()
    {
        // fungsi Search (index.app.blade) data dan kolom agar ketika 5 akan ganti baris
        $datakantins = datakantin::latest()->when(request()->search,
        function($datakantins) { $datakantins = $datakantins->where('namakantin', 'like', '%'. request()->search . '%');
        })->paginate(5);
        // return ke index
        return view('post.index', compact('datakantins'));
    }
    

    public function create()
    {
        return view('post.create');
    } 


    public function store(Request $request)
    {
        //memvalidasi variable
        $this->validate($request, [
            'namakantin'  => 'required',
            'alamat'   => 'required',
            'kontak' => 'required'
        ]);
         // menu create
        $post = datakantin::create([
            'namakantin'    => $request->namakantin,
            'alamat'   => $request->alamat,
            'kontak' => $request->kontak
        ]);
        // return ke index
        return redirect()->route('post.index');
    }
    
}