@extends('layout')
@section('content')

    <body>
        <div class="jumbotron">
            <div class="hero">
                <h1 class="display-4">Sistem Informasi Prakerin
                    <br>SMKN 1 Adiwerna
                </h1>
                <p class="lead">Sistem Informasi Prakerin merupakan situs web yang digunakan untuk membantu Siswa
                    <br>SMKN 1 Adiwerna, Guru, dan Tenaga Kependidikan dalam pelaksanaan Praktik Kerja Lapangan.
                </p>
                <p class="lead">
                    <a class="btn btn-outline-light" href="{{ route('informasiprak') }}" role="button">Informasi
                        Prakerin</a>
                </p>
                <link rel="stylesheet" type="text/css" href="welcome.css">
            </div>
            <div class="icon-container">
                <a class="icon-class" href="https://www.instagram.com/smknegeri1adiwerna/">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a class="icon-class" href="https://www.facebook.com/groups/stmadbtegal/">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="icon-class" href="https://www.x.com/stmadbtegal">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a class="icon-class" href="https://www.youtube.com/c/ADBtv/channels">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>


        {{-- Card Kegiatan Prakerin --}}

        <div class="judulcard">
            Kegiatan Prakerin
        </div>

        <div class="container mb-5 mt-3" style="margin-left: auto; margin-right: auto;">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ($kegiatanprakerin as $kegiatan)
                        <div class="item">
                            <div class="card" style="padding: 0.7rem; width: 300px; height: 430px;">
                                <div class="card-body" style="display: flex; flex-direction: column;">
                                    @if ($kegiatan->image)
                                        <img src="data:image/jpeg;base64,{{ $kegiatan->image }}" class="card-img-top"
                                            alt="{{ $kegiatan->nama_kegiatan }}"
                                            style="width: 240px; height: 250px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('assets/img/no_image.jpg') }}" class="card-img-top"
                                            alt="No Image" style="width: 240px; height: 250px; object-fit: cover;">
                                    @endif
                                    <hr>
                                    <p class="card-text" style="text-align: justify; font-size: 12px">
                                        {{ Illuminate\Support\Str::limit($kegiatan->deskripsi, 100) }}
                                    </p>


                                    <!-- Link Baca Selengkapnya yang membuka modal -->
                                    <a href="#" data-toggle="modal" data-target="#modalSelengkapnya"
                                        style="color: #4055be; text-decoration: none; font-size: 13px"
                                        onclick="showFullDescription({{ json_encode($kegiatan) }})">
                                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Modal untuk Baca Selengkapnya -->
        <div class="modal fade" id="modalSelengkapnya" role="dialog" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSelengkapnyaLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Isi modal -->
                        <div class="text-center">
                            <img id="gambarKegiatan" class="img-fluid mb-3" alt="Gambar Kegiatan">
                        </div>
                        <h5 id="judulKegiatan" class="modal-title mb-3"></h5>
                        <p id="deskripsiKegiatan"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })

            // Fungsi untuk menampilkan deskripsi lengkap pada modal
            function showFullDescription(kegiatan) {
                document.getElementById('judulKegiatan').innerText = kegiatan.nama_kegiatan;

                // Menetapkan gambar ke dalam modal
                if (kegiatan.image) {
                    document.getElementById('gambarKegiatan').src = 'data:image/jpeg;base64,' + kegiatan.image;
                } else {
                    document.getElementById('gambarKegiatan').src = '{{ asset('assets/img/no_image.jpg') }}';
                }

                // Menetapkan deskripsi ke dalam modal
                document.getElementById('deskripsiKegiatan').innerText = kegiatan.deskripsi;
            }
        </script>

    </body>
@stop
