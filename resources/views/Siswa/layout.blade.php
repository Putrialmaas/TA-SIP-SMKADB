<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/img/logosmk.png') }}" type="image/x-icon">
    <title>SISTEM PRAKERIN SMKN 1 ADIWERNA</title>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/siswa/layout.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('dashboard.css') }}"> --}}
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
    <!-- Custom styles for this template -->
    {{-- <link href="{{ asset('assets/css/Admin/vendor/sb-admin-2.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}"> --}}
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>

</head>



<body>

    {{-- navigation bar --}}



    <nav class="navbar fixed-top justify-content-between navbar-expand-lg" style="height: 100%; max-height: 76px;">
        <div class="logo-home">
            <a class="navbar-brand-two d-inline-block ml-1" href="#">
                <img src="{{ asset('assets/img/logosmk.png') }}" alt="Logo" width="40" height="40"
                    class="logo-navbar" />
            </a>
            <div class="navbar-brand2">
                <a href="{{ route('welcome') }}" style="text-decoration: none;">
                    <strong class="text-white">
                        SEKOLAH MENENGAH KEJURUAN
                        <br>NEGERI 1 ADIWERNA
                    </strong>
                </a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav  mb-2 mb-lg-0" style="margin-left: auto;">
                <li class="nav-item" style="padding-top: 1%">
                    <a class="nav-link active1" aria-current="page" href="{{ route('siswa.dashboard') }}">Home</a>
                </li>
                <li class="nav-item" style="padding-top: 1%">
                    <a class="nav-link active2" href="{{ route('siswa.permohonan') }}"> Permohonan Prakerin </a>
                </li>
                <li class="nav-item" style="padding-top: 1%">
                    <a class="nav-link active3 @if (Auth::user()->status == 'Belum Mendaftar' || Auth::user()->status == 'Sudah Mendaftar') disabled @endif"
                        href="{{ route('siswa.jurnal') }}"> Pengisian Jurnal </a>
                </li>
                <li class="nav-item nav-item-divider" style="padding-top: 1%">
                    <a class="nav-link active4 @if (Auth::user()->status == 'Belum Mendaftar' || Auth::user()->status == 'Sudah Mendaftar') disabled @endif"
                        href="{{ route('siswa.laporan') }}"> Pengumpulan Laporan </a>
                </li>
                <li class="nav-item " style="padding-bottom: 1%">
                    <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{-- <img class="img-profile rounded-circle" src="{{ $siswa->name[0] }}"
                                style="height: 2rem; width: 2rem; border-radius: 50% !important;"> --}}
                        @if (Auth::user()->image)
                            <figure class="img-profile rounded-circle avatar font-weight-bold"
                                style="background-image: url(data:image/png;base64,{{ base64_encode(Auth::user()->image) }});
                                    object-fit: fill;
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    width: 35px;
                                    height: 35px;
                                    border-radius: 50%;
                                    overflow: hidden;
                                    opacity: 1;
                                    display: inline-flex;
                                    vertical-align: middle;">
                            </figure>
                        @else
                            <figure class="img-profile rounded-circle avatar font-weight-bold"
                                data-initial="{{ Auth::user()->name[0] }}">
                            </figure>
                        @endif

                        <span class="ml-3 mr-2 d-none d-lg-inline text-gray-600 small"
                            style="margin-left: 5% !important; color: #ffffff !important; margin-right: 0% !important; font-size: 14px;">{{ isset($siswa->name) ? $siswa->name : '' }}</span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" style="cursor: pointer;" href="{{ route('edit.profile') }}">
                            <i class="fas fa-user-gear fa-sm fa-fw mr-2 text-gray-400"></i>
                            Edit Profile
                        </a>
                        <a class="dropdown-item" style="cursor: pointer;" href="{{ route('show.changepassword') }}">
                            <i class="fas fa-user-gear fa-sm fa-fw mr-2 text-gray-400"></i>
                            Change Password
                        </a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"
                            style="cursor: pointer;">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>


    </nav>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var dropdownMenu = $(".dropdown-menu");
            var userDropdown = $(".nav-link.dropdown-toggle");

            // Sembunyikan dropdown "Logout" saat halaman dimuat
            dropdownMenu.hide();

            // Tampilkan dropdown "Logout" saat tombol "Admin" diklik
            userDropdown.on("click", function(e) {
                e
                    .stopPropagation(); // Menghentikan event propagasi agar dropdown tidak menutup dengan sendirinya
                dropdownMenu.show();
            });

            // Sembunyikan dropdown "Logout" saat tombol "Logout" diklik
            $(".dropdown-item").on("click", function(e) {
                if (e.target.textContent.trim() !== "Logout") {
                    // Jika tombol yang diklik bukan "Logout", sembunyikan dropdown
                    dropdownMenu.hide();
                }
            });

            // Sembunyikan dropdown "Logout" saat area lain di luar dropdown diklik
            $(document).on("click", function(e) {
                if (!userDropdown.is(e.target) && !dropdownMenu.is(e.target) && dropdownMenu.has(e.target)
                    .length === 0) {
                    dropdownMenu.hide();
                }
            });
        });
    </script>

    <script>
        // Fungsi untuk mereset notificationStatus ke "open" pada localStorage
        function resetNotificationStatus() {
            localStorage.setItem("notificationStatus", "open");
        }

        // Event listener untuk menambahkan fungsi resetNotificationStatus saat tombol Logout ditekan
        $(document).ready(function() {
            $('#logoutModal .btn-primary').on('click', function() {
                resetNotificationStatus();
            });
        });
    </script>

    @yield('dashboard')
    @yield('permohonan')
    @yield('jurnal')
    @yield('jurnaldata')
    @yield('jurnaldataedit')
    @yield('laporan')
    @yield('pengaturan')


    {{-- <div class="isi">
        
    </div> --}}

    {{-- Footer --}}



</body>
<footer>
    @include('Siswa.layout.footer')
</footer>

</html>
