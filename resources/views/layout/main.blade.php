<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
</head>

<!-- component -->

<body>


    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

        /*
module.exports = {
    plugins: [
        require('tailwindcss-inset')({
            insets: {
                full: '100%'
            }
        })
    ]
};
*/
        .wrapper {
            min-height: 80vh;
            /* Set tinggi minimum wrapper menjadi 100% dari tinggi viewport */
            display: flex;
            flex-direction: column;
        }

        .wrapper>* {
            flex: 1;
            /* Set semua child element dari wrapper menjadi flex 1 untuk menempatkan konten di atas footer */
        }

        .inset-l-full {
            left: 100%;
        }

        .sticky-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            transition: top 0.3s ease-in-out;
        }

        .sticky-top+* {
            margin-top: 56px;
        }

        #navbar {
            transition: background-color 0.3s ease-in-out;
            box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.1);
        }

        #navbar.navbar-scrolled {
            background-color: #f8f8f8;
            box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.1);
        }

        #navbar+main {
            margin-top: 72px;
            /* tinggi navbar + margin atas */
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class=" bg-gray-200">
            <div class="py-3 px-5 bg-white rounded shadow-xl">
                <div class="-mx-1">
                    <ul class="flex w-full flex-wrap items-center h-10">
                        <li class="block relative">
                            <a href="/" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 bg-red-500 text-white" @click.prevent="showChildren=!showChildren">
                                <span class="mr-3 text-xl"> <i class="mdi mdi-view-dashboard"></i> </span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="block relative">
                            <a href="/data_karyawan" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100 transform hover:scale-105" @click.prevent="showChildren=!showChildren">
                                <span class="mr-3 text-xl"> <i class="mdi mdi-account"></i> </span>
                                <span>Data karyawan</span>
                            </a>
                        </li>
                        <li class="block relative">
                            <a href="/jabatanwijaya" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100 transform hover:scale-105" @click.prevent="showChildren=!showChildren">
                                <span class="mr-3 text-xl"><i class="mdi mdi-briefcase-account"></i></span>
                                <span>Data jabatan</span>
                            </a>
                        </li>
                        <li class="block relative">
                            <a href="/DepartemenWijaya" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                                <span class="mr-3 text-xl"> <i class="mdi mdi-archive"></i> </span>
                                <span>Data Departemen</span>
                            </a>
                        </li>
                        <li class="block relative">
                            <a href="/tunjangan" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                                <span class="mr-3 text-xl"> <i class="mdi mdi-currency-usd-circle-outline"></i> </span>
                                <span>Data tunjangan</span>
                            </a>
                        </li>

                        <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                            <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                                <span class="mr-3 text-xl"> <i class="mdi mdi-cash"></i> </span>
                                <span>Data transaksi</span>
                                <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                                <div class="bg-white rounded w-full relative z-10 py-1">
                                    <ul class="list-reset">
                                        <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                            <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Abensi</span> </a>
                                        </li>
                                        <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                            <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Pajak</span> </a>
                                        </li>
                                        <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                            <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Histori Penggajian</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                            <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                                <span class="mr-3 text-xl"> <i class="mdi mdi-cog-outline"></i> </span>
                                <span>Settings</span>
                                <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                                <div class="bg-white rounded w-full relative z-10 py-1">
                                    <ul class="list-reset">
                                        <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                            <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Acount</span> </a>
                                        </li>
                                        <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                            <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Login</span> </a>
                                        </li>
                                        <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                            <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Logout</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        @include('sweetalert::alert')
        @yield('content')
    </div>
    <footer class="bg-gray-200 py-8 px-4 md:px-6">
        <!-- Social Links -->
        <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-500 hover:text-gray-600"><i class="mdi mdi-facebook"></i></a>
            <a href="#" class="text-gray-500 hover:text-gray-600"><i class="mdi mdi-twitter"></i></a>
            <a href="#" class="text-gray-500 hover:text-gray-600"><i class="mdi mdi-instagram"></i></a>
            <a href="#" class="text-gray-500 hover:text-gray-600"><i class="mdi mdi-linkedin"></i></a>
        </div>

        <div class="mt-4 flex justify-center space-x-8">
            <a href="#" class="text-sm text-gray-600 hover:text-gray-800">About Us</a>
            <a href="#" class="text-sm text-gray-600 hover:text-gray-800">Contact</a>
            <a href="#" class="text-sm text-gray-600 hover:text-gray-800">Privacy Policy</a>
            <a href="#" class="text-sm text-gray-600 hover:text-gray-800">Terms of Service</a>
        </div>
        <!-- End Footer Menu -->

        <p class="mt-8 text-sm text-gray-600 text-center">&copy; 2023 Pt Denso Manufacturing Indonesia.</p>
    </footer>
    <!-- End Footer -->




    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        let navbar = document.getElementById('navbar');
        let mainContent = document.querySelector('main');
        let navbarHeight = navbar.offsetHeight;
        let navbarScrolledClass = 'navbar-scrolled';


        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollPos > currentScrollPos) {
                navbar.style.top = '0';
            } else {
                navbar.style.top = `-${navbarHeight}px`;
            }
            prevScrollPos = currentScrollPos;

            // tambahkan class navbar-scrolled untuk navbar dengan background putih ketika di-scroll
            if (currentScrollPos > navbarHeight) {
                navbar.classList.add(navbarScrolledClass);
                mainContent.style.marginTop = `${navbarHeight + 24}px`;
            } else {
                navbar.classList.remove(navbarScrolledClass);
                mainContent.style.marginTop = `72px`;
            }
        }
        let prevScrollPos = window.pageYOffset;

        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollPos > currentScrollPos) {
                document.querySelector('.sticky-top').style.top = '0';
            } else {
                document.querySelector('.sticky-top').style.top = '-56px';
            }
            prevScrollPos = currentScrollPos;
        }
        $(document).on('click', '.open_modal', function() {
            var url = "domain.com/yoururl";
            var tour_id = $(this).val();
            $.get(url + '/' + tour_id, function(data) {
                //success data
                console.log(data);
                $('#tour_id').val(data.id);
                $('#name').val(data.name);
                $('#details').val(data.details);
                $('#btn-save').val("update");
                $('#myModal').modal('show');
            })
        });

        $(document).ready(function() {
            $('#modal-open-button').click(function() {
                $('#modal-departemen').modal('show');
            });

            $('#form-departemen').on('submit', function(e) {
                var formData = new FormData(this);
                e.preventDefault();
                $.ajax({
                    url: "{{ ('departemen') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // melakukan aksi setelah data berhasil disimpan
                    },
                    error: function(jqXHR) {
                        if (jqXHR.status == 422) {
                            var errors = jqXHR.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key).addClass('is-invalid');
                                $('#' + key + '-error').html(value);
                            });
                        }
                    }
                });
            });
        });

        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm_' + id).submit();
                }
            })
        }
    </script>
</body>

</html>