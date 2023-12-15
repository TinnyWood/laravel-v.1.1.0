@extends('../layout.main')

@section('title', 'Halaman edit Tunjangan')

@section('content')
<main class="p-6 sm:p-10 space-y-6">
    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
            <h1 class="text-4xl font-semibold mb-2">Edit Tunjangan </h1>
            <h2 class="text-gray-600 ml-0.5">PT Denso Manufacturing Indonesia</h2>
        </div>
    </div>
    <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="{{ route('TunjanganWijaya.update', $TunjanganWijaya->id) }}" method="POST">
        @csrf
        @method('PUT')
        <center>
            <h3 class="text-xl font-medium text-gray-900 dark:text-white">FORM EDIT DATA</h3>
        </center>
        <div>
            <label for="tunjangan" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Nama Tunjangan</label>
            <input type="text" name="tunjangan" value="{{ $TunjanganWijaya->tunjangan }}" id="tunjangan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukan Nama Tunjangan" required="">
        </div>
        <div>
            <label for="total" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total</label>
            <input type="number" name="total" value="{{ $TunjanganWijaya->total }}" id="total" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukan Total" required="">
        </div>
        <div class="flex justify-between">
            <button type="reset" class="w-1/2 mr-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Reset</button>
            <button type="submit" class="w-1/2 ml-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</main>
@endsection