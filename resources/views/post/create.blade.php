@extends('layout.app', ['title' => 'Tambah Post'])

{{-- section dari app.blade --}}
@section('content')

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded-xl shadow-sm lg:w-2/3 mx-auto">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="mt-8">
                @csrf
                {{-- input create nama kantin --}}
                <div>
                    <label class="font-bold ml-2 text-gray-700" for="nama">Nama Kantin ✍</label>
                    <input  id="nama" type="text" name="namakantin" value="{{ old('namakantin') }}"
                    class="w-full bg-gray-100 p-2 shadow-sm mt-2 rounded-lg"
                    placeholder="Cemara">
                </div>
                {{-- input create alamat --}}
                <div class="mt-5">
                    <label for="alamat" class="font-bold ml-2 text-gray-700">Alamat 🌎</label>
                    <input id="alamat" type="text" name="alamat" value="{{ old('alamat') }}"
                    class="w-full bg-gray-100 p-2 rounded-lg shadow-sm mt-2"
                    placeholder="desa ledug ...">
                </div>
                {{-- input create kontak --}}
                <div class="mt-5">
                    <label for="kontak" class="font-bold ml-2 text-gray-700">Kontak ☎</label>
                    <input id="kontak" type="text" name="kontak" value="{{ old('kontak') }}"
                    class="w-full bg-gray-100 p-2 rounded-lg shadow-sm mt-2"
                    placeholder="+62 000 000 000">
                    </input>
                </div>
                {{-- tombol create submit --}}
                <div class="mt-5">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold p-2 w-35 rounded-lg inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6h5a2 2 0 012 2v7a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5v5.586l-1.293-1.293zM9 4a1 1 0 012 0v2H9V4z" />
                        </svg>
                        <span class="mr-2">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script> CKEDITOR.replace( 'content' ); </script>

@endsection