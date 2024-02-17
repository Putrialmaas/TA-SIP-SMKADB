@extends('layout')
@section('content')



    <body>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="check-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                </path>
            </symbol>
        </svg> --}}

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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-instagram">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                        </rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
                <a class="icon-class" href="https://www.facebook.com/groups/stmadbtegal/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-facebook">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                </a>
                <a class="icon-class" href="https://twitter.com/stmadbtegal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-twitter">
                        <path
                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                        </path>
                    </svg>
                </a>
                <a class="icon-class" href="https://www.youtube.com/c/ADBtv/channels">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-youtube">
                        <path
                            d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                        </path>
                        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Card Kegiatan Prakerin --}}

        <div class="judulcard">
            Kegiatan Prakerin
        </div>
        {{-- <div class="alur mb-5 mt-3 text-center">
            <img src="{{ asset('assets/img/DesainAlurPrakerin2.png') }}" class="w-75" alt=""
                style="border-radius: 16px">
        </div> --}}
        {{-- <div style="width: 100%; display: flex; justify-content: space-evenly; margin: 16px 0;">
            <div class="card" style="width: 18rem; padding: 1rem; margin: 4px">
                <img src="assets/img/fotoprak1.png" class="card-img-top" style="height: 300px ;object-fit:cover"
                    alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; padding: 1rem; margin: 4px">
                <img src="assets/img/fotoprak1.png" class="card-img-top" style="height: 300px ;object-fit:cover"
                    alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; padding: 1rem; margin: 4px">
                <img src="assets/img/fotoprak1.png" class="card-img-top" style="height: 300px ;object-fit:cover"
                    alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
        </div> --}}

        <div class="container mb-5 mt-3" style="margin-left: auto; margin-right: auto;">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card" style="padding: 0.7rem; width: 300px; height: 430px;">
                            <div class="card-body" style="display: flex; flex-direction: column;">
                                <img src="{{ asset('assets/img/fotoprak1.png') }}" class="card-img-top" alt="fotoprak"
                                    style="width: 240px; height: 250px;">
                                <hr>
                                <p class="card-text" style="text-align: justify; font-size: 12px">Lorem ipsum dolor sit amet
                                    consectetur, adipisicing elit. Quam quia labore natus vero modi unde inventore delectus,
                                    cumque
                                    sunt?
                                </p>



                                <a class="detail" data-toggle="modal" data-target="#modalTambah" role="button"
                                    id="staticBackdropLabel"
                                    style="text-align: end; color: #4055be; text-decoration: none; font-size: 13px"> Baca
                                    Selengkapnya
                                    <i class="fas fa-arrow-right"></i>
                                </a>


                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="card" style="padding: 0.7rem; width: 300px; height: 430px;">
                            <div class="card-body" style="display: flex; flex-direction: column;">
                                <img src="{{ asset('assets/img/fotoprak2.jpg') }}" class="card-img-top" alt="fotoprak"
                                    style="width: 240px; height: 250px;">
                                <hr>
                                <p class="card-text" style="text-align: justify; font-size: 12px">Lorem ipsum dolor sit
                                    amet
                                    consectetur,
                                    adipisicing elit. Quam quia labore natus vero modi unde inventore delectus, cumque
                                    sunt?
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="padding: 0.7rem; width: 300px; height: 430px;">
                            <div class="card-body" style="display: flex; flex-direction: column;">
                                <img src="{{ asset('assets/img/fotoprak3.jpg') }}" class="card-img-top" alt="fotoprak"
                                    style="width: 240px; height: 250px;">
                                <hr>
                                <p class="card-text" style="text-align: justify; font-size: 12px">Lorem ipsum dolor sit
                                    amet
                                    consectetur,
                                    adipisicing elit. Quam quia labore natus vero modi unde inventore delectus, cumque
                                    sunt?
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="padding: 0.7rem; width: 300px; height: 430px;">
                            <div class="card-body" style="display: flex; flex-direction: column;">
                                <img src="{{ asset('assets/img/fotoprak4.jpg') }}" class="card-img-top" alt="fotoprak"
                                    style="width: 240px; height: 250px;">
                                <hr>
                                <p class="card-text" style="text-align: justify; font-size: 12px">Lorem ipsum dolor sit
                                    amet
                                    consectetur,
                                    adipisicing elit. Quam quia labore natus vero modi unde inventore delectus, cumque
                                    sunt?
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="padding: 0.7rem; width: 300px; height: 430px;">
                            <div class="card-body" style="display: flex; flex-direction: column;">
                                <img src="{{ asset('assets/img/fotoprak5.jpg') }}" class="card-img-top" alt="fotoprak"
                                    style="width: 240px; height: 250px;">
                                <hr>
                                <p class="card-text" style="text-align: justify; font-size: 12px">Lorem ipsum dolor sit
                                    amet
                                    consectetur,
                                    adipisicing elit. Quam quia labore natus vero modi unde inventore delectus, cumque
                                    sunt?
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="padding: 0.7rem; width: 300px; height: 430px;">
                            <div class="card-body" style="display: flex; flex-direction: column;">
                                <img src="{{ asset('assets/img/fotoprak6.jpg') }}" class="card-img-top" alt="fotoprak"
                                    style="width: 240px; height: 250px;">
                                <hr>
                                <p class="card-text" style="text-align: justify; font-size: 12px">Lorem ipsum dolor sit
                                    amet
                                    consectetur,
                                    adipisicing elit. Quam quia labore natus vero modi unde inventore delectus, cumque
                                    sunt?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" style="z-index: 1000">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> --}}



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
        </script>
        <script>
            $(document).ready(function() {
                $(".detail").click(function() {
                    $("#modalKeterangan").modal('show');
                });
            });
        </script>
    </body>

@stop
 