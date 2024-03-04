@extends('layout')
@section('detail')

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        .container {

            margin-left: 4vw;
            /* padding: 8px 64px; */
        }

        .fas.fa-arrow-left {
            padding-left: 8.9vh;
            padding-right: 3vh;
            padding-top: 13vh;
            color: #000000
        }

        .Judul {
            font-family: Poppins;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            color: #000000;

        }

        .name {
            font-family: Poppins;
            font-weight: 900;
            font-size: 30px;
            padding-left: 4vh;

        }

        .img-fluid {
            width: 100%;
            max-width: 640px;
            overflow: hidden;
            position: relative;
            border-radius: 8px;
        }

        .posisi {
            padding-left: 4vh;
            font-family: Poppins;
        }

        .persyaratan {
            padding-left: 4vh;
            font-family: Poppins;
        }

        .kontak {
            padding-left: 4vh;
            font-family: Poppins;
        }

        .card {
            border-radius: 16px;
            border-color: #000000;
        }

        .keterangan {
            padding-left: 4.5vh;
            padding-top: 3vh;
            font-size: 16px;
            font-family: Poppins;
            text-align: justify;

        }


        .thumbnail-container {
            width: 70px;
            height: 70px;
            overflow: hidden;
            border-radius: 8px;
        }

        .thumbnail-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;

        }

        /* Gaya untuk nama perusahaan dan deskripsi */
        .nama {
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            color: #000000;
        }

        .ket {
            font-size: 10px;
            text-align: justify;
            /* Misalnya, atur ukuran font deskripsi */
        }

        /* Gaya untuk baris */
        .row-container {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
            margin-left: 0.5rem;
        }

        @media (max-width: 768px) {
            .container {
                margin-left: 2vw;
            }

            .Judul {
                font-size: 18px;

            }

            /* .fas.fa-arrow-left {
                                                                                        padding-left: 8px;
                                                                                    } */

            .name {
                font-size: 20px;
                /* padding-left: 4.5vw; */
            }

            .img-fluid {
                width: 70vw;
                height: auto;
            }

            .keterangan {
                /* padding-left: 4.5vw; */
                /* padding-top: 2vh; */
                font-size: 15px;
                width: 70vw;
            }

        }
    </style>

    <body>
        <div class="row" style="width: 100%; margin-bottom: 10vh;">
            <div class="Judul mb-3">
                <a href="{{ route('informasiprak') }}"><i style=""
                        class="fas fa-arrow-left ps-lg-5 ps-md-3 ps-3 "></i></a>
                Informasi Prakerin
            </div>
            <div class="col-md-7 mb-lg-0 mb-md-3 mb-3">
                <div class="container ps-md-1">
                    <div class="name">
                        {{ $informasiTempatPrakerin->nama_perusahaan }}
                        <div class="img-fluid" style="">
                            @if ($informasiTempatPrakerin->image)
                                <img src="data:image/jpeg;base64,{{ $informasiTempatPrakerin->image }}"
                                    style="width: 100%; object-fit: cover;" alt="...">
                            @else
                                <img src="{{ asset('assets/img/no_image.jpg') }}" style="width: 100%; object-fit: cover;"
                                    alt="No Image">
                            @endif
                        </div>
                    </div>
                    <p class="keterangan mb-4">
                        {{ $informasiTempatPrakerin->deskripsi }}
                    </p>
                    <div class="mb-3">
                        <div class="name">Posisi</div>
                        <p class="keterangan">
                            @php
                                $posisiList = explode(',', $informasiTempatPrakerin->posisi);
                            @endphp

                            @foreach ($posisiList as $posisi)
                                {{ $loop->iteration }}. {{ trim($posisi) }}<br>
                            @endforeach
                        </p>
                    </div>
                    <div class="mb-3">
                        <div class="name">Persyaratan</div>
                        <p class="keterangan">
                            @php
                                $persyaratanList = explode(',', $informasiTempatPrakerin->persyaratan);
                            @endphp

                            @foreach ($persyaratanList as $persyaratan)
                                - {{ trim($persyaratan) }}<br>
                            @endforeach
                        </p>
                    </div>

                    <div class="mb-3">
                        <div class="name">Alamat dan Kontak</div>
                        <p class="keterangan">
                            {{ $informasiTempatPrakerin->nama_perusahaan }}
                            <br>{{ $informasiTempatPrakerin->alamat }}
                            <br>Tel: {{ $informasiTempatPrakerin->telp }}
                            <br>Email: {{ $informasiTempatPrakerin->email }}
                        </p>
                    </div>

                    {{-- <div class="btnpermohonan" style="padding-left:5.6vh; margin-top: 5vh;">
                        <button type="button" class="btn"
                            style="background-color: #445cb1; color: #ffffff;">Ajukan Permohonan</button>
                    </div> --}}
                </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="card mx-5 py-3 px-3">
                    @foreach ($listinformasiTempatPrakerin->shuffle()->take(3) as $informasi)
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-3">
                                <div class="thumbnail-container my-auto">
                                    @if ($informasi->image)
                                        <img src="data:image/jpeg;base64,{{ $informasi->image }}" alt="...">
                                    @else
                                        <img src="{{ asset('assets/img/no_image.jpg') }}" alt="No Image">
                                    @endif
                                </div>
                            </div>
                            <div class="col-8 col-md-8 col-lg-9">
                                <a class="nama"
                                    href="{{ route('detailinfo', $informasi->id) }}">{{ $informasi->nama_perusahaan }}</a>
                                <br>
                                <p class="ket">{{ $informasi->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
@stop
