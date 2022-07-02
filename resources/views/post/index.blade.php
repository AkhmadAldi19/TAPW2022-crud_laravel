@extends('layout.app', ['title' => 'Data datakantins'])

@section('content')
    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded-xl shadow-sm ">
            {{-- judul --}}
            <div class="px-6 pt-4 text-gray-900 text-center text-3xl font-bold font-poppins">
                <h1>KANTIN KITA 🥙</h1>
            </div>
            
            <div class="flex flex-col space-y-8">
                <div>
                </div>
            <div>
                {{-- page form untuk ke search dan tombol create project --}}
                <form action="{{ route('post.index') }}" method="GET" class="flex items-center pb-4 space-x-4 ">
                    {{-- menu serch data --}}
                    <input type="text" name="search"
                    class="w-2/4 bg-gray-100 p-3 rounded-lg shadow-sm  border border-gray-100 focus:outline-none mr-96" placeholder="ketik data dan enter">
                    {{-- menu tombol create membuat --}}
                    <a href="{{ route('post.create') }}" class="bg-green-500 hover:bg-green-600  text-white font-semibold p-3 w-60 rounded-lg inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-8 mr-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg><span >Tambah Data</span>
                    </a>
                </form>
            </div>
            
            </div>

            {{-- page tabel --}}
            <table class="min-w-full table-auto mt-2">
                <thead class="justify-between">
                    {{-- tabel head --}}
                    <tr class="bg-blue-300 w-full">
                        <th class="px-16 py-2">
                            <span class="text-white">ID</span>
                        </th>
                        <th class="px-16 py-2 text-left">
                            <span class="text-white">NAMA KANTIN</span>
                        </th>
                        <th class="px-16 py-2 text-left">
                            <span class="text-white">ALAMAT</span>
                        </th>
                        <th class="px-16 py-2 text-left">
                            <span class="text-white">KONTAK</span>
                        </th>
                        <th class="px-16 py-2">
                            <span class="text-white">AKSI</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-gray-200">
                    @forelse($datakantins as $post)
                        {{-- tabel isi  --}}
                        <tr class="bg-white border-2 border-gray-200">
                            <td class="px-16 py-2 text-center font-poppins font-semibold">
                                {{ $post->id }}
                            </td>
                            <td class="px-16 py-2 font-poppins font-semibold text-justify">
                                {{ $post->namakantin }}
                            </td>
                            <td class="px-16 py-2 text-justify font-poppins font-semibold">
                                {{ $post->alamat }}
                            </td>
                            <td class="px-16 py-2 text-justify font-poppins font-semibold">
                                {{ $post->kontak }}
                            </td>
                            <td class="px-10 py-2 text-center">
                            {{-- tabel isi aksi pada form submit --}}
                            <form onsubmit="" action="" method="">
                                {{-- tombol edit --}}
                                <button class="bg-blue-400 text-white px-4 py-2 rounded     hover:bg-blue-500 text-xs focus:outline-none mr-2 font-poppins font-semibold"><a href="">
                                    EDIT</a>
                                </button>
                                {{-- tombol hapus --}}
                                <button type="submit" class="bg-red-400 text-white px-4 py-2 rounded hover:bg-red-500 text-xs focus:outline-none"> 
                                    HAPUS
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        {{-- tombol muncul jika data tidak tersedia --}}
                        <div class="bg-red-400 text-white p-3 rounded shadow-sm mb-3">
                            Maaf bos Data Belum Tersedia! 🖐
                        </div>
                    @endforelse
                </tbody>
            </table>
            
            {{-- paginate link --}}
            <div class="mt-2">
                {{ $datakantins->links('vendor.pagination.paginate') }}
            </div>
        </div>
    </div>

@endsection