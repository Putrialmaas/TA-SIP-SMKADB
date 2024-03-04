@extends('siswa.layout')
@section('dashboard')

    <link href="{{ asset('assets/css/siswa/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/siswa/layout.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Pastikan Anda memasukkan jQuery -->


    {{-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Mendapatkan URL halaman sebelumnya
            var previousPage = document.referrer;
    
            // Mendapatkan elemen notifikasi dan tombol tutup berdasarkan ID
            var notification = document.getElementById("notification");
            var closeButton = notification.querySelector(".btn-close");
            var notificationStatus = "open"; // Default status "open"
    
            // Mengecek apakah halaman sebelumnya adalah halaman login
            if (previousPage.includes("login")) {
                // Jika halaman sebelumnya adalah halaman login, biarkan status "open"
            } else {
                // Jika halaman sebelumnya bukan halaman login, atur status "closed"
                notificationStatus = "closed";
            }
    
            if (notificationStatus === "open") {
                // Tampilkan notifikasi jika statusnya adalah "open"
                notification.classList.add("d-flex");
                notification.style.display = "block";
            } else {
                // Jika status notifikasi adalah "closed", maka sembunyikan notifikasi
                notification.classList.remove("d-flex");
                notification.style.display = "none";
            }
    
            // Tambahkan event listener ke tombol tutup
            closeButton.addEventListener("click", function () {
                // Menghapus kelas .d-flex dan mengubah properti display menjadi "none"
                notification.classList.remove("d-flex");
                notification.style.display = "none";
                localStorage.setItem("notificationStatus", "closed");
            });
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            var notification = $("#notification");
            var closeButton = notification.find(".btn-close");
            var notificationStatus = localStorage.getItem("notificationStatus") || "open";

            if (notificationStatus === "open") {
                notification.addClass("d-flex").show();
            } else {
                notification.removeClass("d-flex").hide();
            }

            closeButton.on("click", function() {
                notification.removeClass("d-flex").hide();
                localStorage.setItem("notificationStatus", "closed");
            });

            // Event listener untuk menutup notifikasi saat pindah halaman
            $(window).on("beforeunload", function() {
                // Jika notifikasi masih terbuka, tutup dan atur status ke "closed"
                if (notificationStatus === "open") {
                    notification.removeClass("d-flex").hide();
                    localStorage.setItem("notificationStatus", "closed");
                }
            });
        });
    </script>


    {{-- @if (session('notificationStatus') === 'open') --}}
    <div class="container-fluid px-5" style="margin-top: 90px">
        <div class="row">
            <div class="alert alert-success d-flex align-items-center" role="alert" id="notification">
                <i class="fas fa-check-circle "></i>
                <div style="margin-left: 20px">
                    Selamat datang, {{ isset($siswa->name) ? $siswa->name : '' }} di Sistem Informasi Prakerin!
                </div>
    
                <button class="btn btn-close" aria-label="Close" data-dismis="alert" style="margin-left: auto;"></button>
            </div>
        </div>
        
    </div>
    {{-- @endif --}}
    {{-- <script>
        // Set localStorage saat halaman dimuat
        localStorage.setItem("notificationStatus", "open");
    </script> --}}


    <div class="container-fluid px-5" style="padding-top: 10px">
        <div class="row g-3">
            <div class="col-md-12 col-lg-8 pe-lg-5">
                <div class="row mb-2">
                    <div class="card" style="padding: 0;">
                        <div class="card-body" style="padding: 0;">
                            <div class="row" style="padding: 0 12px;">
                                <div class="col-2 col-md-1 text-center"
                                    style="background-color: #D9D9D9; border-top-left-radius: 5px; border-bottom-left-radius: 5px; display: flex; align-items: center; justify-content: center">
                                    <i class="fas fa-calendar-alt" style="color: #25316D;"></i>
                                </div>
                                <div class="col-10 col-md-11" style="padding: 16px 16px; font-weight:bold">
                                    {{ isset($permohonan->tanggal_mulai) ? App\Helpers\MyHelpers::getIndonesianDate($permohonan->tanggal_mulai) : 'Belum dijadwalkan' }}
                                    -
                                    {{ isset($permohonan->tanggal_selesai) ? App\Helpers\MyHelpers::getIndonesianDate($permohonan->tanggal_selesai) : 'Belum dijadwalkan' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="card" style="padding: 0;">
                        <div class="card-body" style="padding: 0;">
                            <div class="row" style="padding: 0 12px;">
                                <div class="col-2 col-md-1 text-center"
                                    style="background-color: #D9D9D9; border-top-left-radius: 5px; border-bottom-left-radius: 5px; display: flex; align-items: center; justify-content: center">
                                    <i class="fas fa-user" style="color: #25316D;"></i>
                                </div>
                                <div class="col-10 col-md-11" style="padding: 16px 16px;">
                                    Guru Pembimbing: <br>
                                    <b>{{ $guru ? $guru->name : 'Belum dijadwalkan' }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="card" style="padding: 0;">
                        <div class="card-body" style="padding: 0;">
                            <div class="row" style="padding: 0 12px;">
                                <div class="col-2 col-md-1 text-center"
                                    style="background-color: #D9D9D9; border-top-left-radius: 5px; border-bottom-left-radius: 5px; display: flex; align-items: center; justify-content: center">
                                    <i class="fas fa-building" style="color: #25316D;"></i>
                                </div>
                                <div class="col-10 col-md-11" style="padding: 16px 16px;">
                                    Tempat Pelaksaan Prakerin: <br>
                                    <b>{{ $permohonan ? $permohonan->tempat_prakerin : 'Belum mengajukan permohonan' }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="card" style="padding: 0;">
                        <div class="card-body" style="padding: 0;">
                            <div class="row" style="padding: 0 12px;">
                                <div class="col-2 col-md-1 text-center"
                                    style="background-color: #D9D9D9; border-top-left-radius: 5px; border-bottom-left-radius: 5px; display: flex; align-items: center; justify-content: center">
                                    <i class="fas fa-exclamation-circle" style="color: #25316D;"></i>
                                </div>
                                <div class="col-10 col-md-11" style="padding: 16px 16px;">
                                    Status Prakerin: <br>
                                    <b>{{ $siswa->status }}</b> <br> <br>
                                    Status Permohonan: <br>
                                    <b>{{ $permohonan ? $permohonan->status : 'Belum mengajukan' }}</b> <br> <br>
                                    Status Laporan: <br>
                                    <b>
                                        @if ($bimbingan)
                                            @if ($bimbingan->status == 'Revisi')
                                                Perlu Revisi
                                            @elseif ($bimbingan->status == 'ACC')
                                                Telah Disetujui
                                            @else
                                                {{ $bimbingan->status }}
                                            @endif
                                        @else
                                            Belum ada laporan
                                        @endif
                                    </b> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="row mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="isi-profil" style="padding-left: 14px; padding-right: 14px; padding-bottom: 12px">
                                <div class="row mb-2">
                                    <div class="col text-start">
                                        Profil
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-4">
                                        @if (Auth::user()->image)
                                            <figure class="img-profile"
                                                style="background-image: url(data:image/png;base64,{{ base64_encode(Auth::user()->image) }});
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                width: 90px;
                                                height: 120px;
                                                ">
                                            </figure>
                                        @else
                                            <figure class="img-profile"
                                                style="font-size: 60px;
                                                width: 90px;
                                                height: 120px;
                                                line-height: 120px; /* Sesuaikan dengan tinggi gambar */
                                                text-align: center;
                                                color: #000000;
                                                background-color: #d4d4d4;
                                                overflow: hidden;">
                                                {{ substr(Auth::user()->name, 0, 1) }}
                                            </figure>
                                        @endif
                                    </div>

                                    <div class="col-6 col-md-8 col-lg-8" style="padding-top: 20px; padding-left: 0px;">
                                        {{ isset($siswa->name) ? $siswa->name : '' }}
                                        <br>{{ isset($siswa->name) ? $siswa->NIS : '' }}
                                        <br>{{ isset($siswa->name) ? $siswa->email : '' }}
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="card-text text-center mt-1">
                                {{ isset($siswa->jurusan)
                                    ? match ($siswa->jurusan) {
                                        'DPIB' => 'Desain Pemodelan dan Informasi Bangunan',
                                        'TE' => 'Teknik Elektronika',
                                        'TJKT' => 'Teknik Jaringan Komputer dan Telekomunikasi',
                                        'TK' => 'Teknik Ketenagalistrikan',
                                        'TM' => 'Teknik Mesin',
                                        'TKRO' => 'Teknik Kendaraan Ringan dan Otomotif',
                                        'TPFL' => 'Teknik Pengelasan dan Fabrikasi Logam',
                                        default => '',
                                    }
                                    : '' }}
                                <br>SMK Negeri 1 Adiwerna
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="card" style="padding: 0;">
                    <div class="card-body">
                        <div class="isi-profil" style="padding-left: 14px; padding-right: 14px; padding-bottom: 12px">
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="text-start">
                                        Profil
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4">
                                    @if (Auth::user()->image)
                                        <figure class="img-profile"
                                            style="background-image: url(data:image/png;base64,{{ base64_encode(Auth::user()->image) }});
                                            background-size: cover;
                                            background-repeat: no-repeat;
                                            background-position: center;
                                            width: 90px;
                                            height: 120px;">
                                        </figure>
                                    @else
                                        <figure class="img-profile"
                                            style="font-size: 60px;
                                            width: 90px;
                                            height: 120px;
                                            line-height: 120px; /* Sesuaikan dengan tinggi gambar */
                                            text-align: center;
                                            color: #000000;
                                            background-color: #d4d4d4;
                                            overflow: hidden;">
                                            {{ substr(Auth::user()->name, 0, 1) }}
                                        </figure>
                                    @endif
                                </div>

                                <div class="col-8" style="padding-top: 20px; padding-left: 0px;">
                                    {{ isset($siswa->name) ? $siswa->name : '' }}
                                    <br>{{ isset($siswa->name) ? $siswa->NIS : '' }}
                                    <br>{{ isset($siswa->name) ? $siswa->email : '' }}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text text-center mt-1">
                            {{ isset($siswa->jurusan)
                                ? match ($siswa->jurusan) {
                                    'DPIB' => 'Desain Pemodelan dan Informasi Bangunan',
                                    'TE' => 'Teknik Elektronika',
                                    'TJKT' => 'Teknik Jaringan Komputer dan Telekomunikasi',
                                    'TK' => 'Teknik Ketenagalistrikan',
                                    'TM' => 'Teknik Mesin',
                                    'TKRO' => 'Teknik Kendaraan Ringan dan Otomotif',
                                    'TPFL' => 'Teknik Pengelasan dan Fabrikasi Logam',
                                    default => '',
                                }
                                : '' }}
                            <br>SMK Negeri 1 Adiwerna
                        </p>
                    </div>
                </div> --}}
                @if ($siswa->status === 'Selesai Prakerin')
                    <div class="row">
                        <div class="card" style="margin-top: 12px; padding: 37px 0;">
                            <p class="card-text text-center mt-1">
                                Nilai Prakerin
                            </p>
                            <p class="card-text text-center mt-1">
                                {{ $siswa->nilai }}
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="judulcard mb-5 mt-5">
        Informasi
    </div>
    <div class="row g-4 mx-3" style="margin-bottom: 13vh">
        <div class="col-md-4">
            <div class="card card1 shadow" style="height: 100%">
                <div class="card-body">
                    <p class="card-title">
                        Permohonan Prakerin
                    </p>
                    <p align="justify" class="card-text mt-4">Siswa melakukan Pendaftaran Prakerin melalui menu Permohonan
                        Prakerin dengan mengisi beberapa data untuk menunjang keberjalanan pendaftaran Prakerin.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card1 shadow" style="height: 100%">
                <div class="card-body">
                    <p class="card-title">
                        Pengisian Jurnal
                    </p>
                    <p align="justify" class="card-text mt-4">Siswa melakukan pengisian jurnal harian dengan mengisi
                        tanggal kegiatan dan keterangan kegiatan yang dilakukan pada hari tersebut.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card1 shadow" style="height: 100%">
                <div class="card-body">
                    <p class="card-title">
                        Pengumpulan Laporan
                    </p>
                    <p align="justify" class="card-text mt-4">Siswa melakukan pengumpulan Laporan Akhir Prakerin dalam
                        bentuk link google drive untuk proses bimbingan dengan Guru Pembimbing.</p>
                </div>
            </div>
        </div>
    </div>
@stop
