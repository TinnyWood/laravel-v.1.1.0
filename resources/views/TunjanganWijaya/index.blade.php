@extends('../layout.main')

@section('title', 'Halaman nama')

@section('content')
<main class="p-6 sm:p-10 space-y-6">
    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
            <h1 class="text-4xl font-semibold mb-2">Data nama</h1>
            <h2 class="text-gray-600 ml-0.5">PT Denso Manufacturing Indonesia</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
            <button class="inline-flex px-5 py-3 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full rounded-md mb-3 " type="button" data-modal-toggle="authentication-modal">
                <i class="mdi mdi-plus"></i>
                Tambah nama
            </button>
        </div>
    </div>
    <table class="table-auto w-full" id="myTable">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <div class="font-semibold text-left">NO.</div>
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <div class="font-semibold text-left">nama</div>
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <div class="font-semibold text-left">email</div>
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <div class="font-semibold text-center">Aksi</div>
                </th>
            </tr>
        </thead>
        <tbody class="text-sm divide-y divide-gray-100">
            @php $no = 1 @endphp
            @foreach ($TunjanganWijaya as $data)
            <tr>
                <td class="p-2 whitespace-nowrap">
                    <div class="font-medium text-green-800">{{$no++}}</div>
                    </div>
                </td>

                <td class="p-2 whitespace-nowrap">
                    <div class="text-left">{{$data->nama}}</div>
                </td>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-left">{{ $data->email }}</div>
                </td>
                <td class="p-2 whitespace-nowrap">
                    <div class="text-lg text-center">
                        <form id="deleteForm_{{ $data->id }}" action="{{ route('TunjanganWijaya .destroy', [$data->id]) }}" method="POST">
                            <a href="{{ route('TunjanganWijaya .edit', $data->id) }}" class="inline-flex items-center px-4 py-2 border border-yellow-500 rounded-md font-semibold text-yellow-500 uppercase tracking-widest hover:bg-yellow-500 hover:text-white active:bg-yellow-600 focus:outline-none focus:border-yellow-600 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                <span><i class="mdi mdi-pencil"></i></span></a>

                            @method('delete')
                            @csrf
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-red-500 rounded-md font-semibold text-red-500 uppercase tracking-widest hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:border-red-600 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" onclick="event.preventDefault(); confirmDelete('{{ $data->id }}');"><i class="mdi mdi-delete"></i></a>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>

<!-- modal tambah data -->
<div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="{{ route('TunjanganWijaya .store') }}" method="POST">
                @csrf
                <center>
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">FORM TAMBAH DATA</h3>
                </center>
                <div>
                    <label for="nama" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Nama nama</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukan nama" required="">
                </div>
                <div>
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">email</label>
                    <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukan nama" required="">
                </div>
                <div class="flex justify-between">
                    <button type="reset" class="w-1/2 mr-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Reset</button>
                    <button type="submit" class="w-1/2 ml-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection