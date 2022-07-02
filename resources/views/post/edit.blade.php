@extends('layout.app', ['title' => 'Edit Post'])

@section('content')

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded-xl shadow-sm lg:w-2/3 mx-auto">
            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- tabel update nama --}}
                <div class="mt-5">
                    <label class="font-bold ml-2 text-gray-700" for="nama">Nama</label>
                    {{-- mengambil inputan nama kantin --}}
                    <input id="nama" type="text" name="namakantin" id value="{{ old('namakantin', $post->namakantin) }}"
                    class="w-full bg-gray-100 p-2 shadow-sm mt-2 rounded-lg" placeholder="judul post">
                </div>
                {{-- tabel update Alamat --}}
                <div class="mt-5">
                    <label class="font-bold ml-2 text-gray-700" for="alamat">Alamat</label>
                    {{-- mengambil inputan alamat --}}
                    <input id="alamat" type="text" name="alamat" value="{{ old('alamat', $post->alamat) }}"
                    class="w-full bg-gray-100 p-2 shadow-sm mt-2 rounded-lg" placeholder="judul post">
                </div>
                {{-- tabel update Kontak --}}
                <div class="mt-5">
                    <label class="font-bold ml-2 text-gray-700" for="kontak">Kontak</label>
                    {{-- mengambil inputan kontak --}}
                    <input id="kontak" type="text" name="kontak" value="{{ old('kontak', $post->kontak) }}"
                    class="w-full bg-gray-100 p-2 shadow-sm mt-2 rounded-lg" placeholder="judul post">
                </div>
                {{-- submit data --}}
                <div class="mt-5">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold p-2 w-35 rounded-lg inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 mr-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                        </svg><span class="mr-2">Perbarui</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection