@extends('admin.layout')
@section('trashbimbingan')

    <body>
        <div class="Judul">
            <a href="{{ route('admin.datapembagianbimbingan') }}"><i style="padding-right: 2vh; color: #000000"
                    class="fas fa-chevron-left"></i></a>
            Trash Pembagian Bimbingan
        </div>

        @if (session('success'))
            <div class="success-floating">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" style="color:#44B158"
                                fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                <path
                                    d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                            </svg>
                            <p class="font-weight-bold font-size-20 mt-2">{{ session('success') }}</p>
                            <div class="modalfoot mb-3">
                                <button type="button" class="btn" onclick="closeSuccessNotification()"
                                    style="background-color: #A4A6B9; color: #ffffff; font-size: 16px;">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-floating">
                {{ session('error') }}
            </div>
        @endif
        <div class="card shadow mb-4" style="margin-top: 4vh">
            <div class="card-header py-3">
                <p class="sub-judul m-0">
                    List Data
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" orderable="false" style="cursor: unset">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="select-all" id="select-all">
                                        <label class="form-check-label" for="select-all"></label>
                                    </div>
                                </th>
                                <th>Guru Pembimbing</th>
                                <th>Jurusan Guru</th>
                                <th>Siswa</th>
                                <th>NIS</th>
                                <th>Status</th>
                                <th>Nilai</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($deletedSiswa as $siswa)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check" style="padding-left: 0; margin-left: 30px;">
                                            <input class="form-check-input" type="checkbox" value="{{ $bimbingan->id }}"
                                                id="select-item-{{ $bimbingan->id }}">
                                            <label class="form-check-label" for="selectitem"></label>
                                        </div>
                                    </td>
                                    <td>{{ $bimbingan->guru->name }}</td>
                                    <td>{{ isset($bimbingan->guru->jurusan) ? $jurusanGuruMapping[$bimbingan->guru->jurusan] : '' }}
                                    </td>
                                    <td>{{ $bimbingan->siswa->name }}</td>
                                    <td>{{ $bimbingan->NIS }}</td>
                                    <td>{{ $bimbingan->status }}</td>
                                    <td>{{ $bimbingan->nilai }}</td>
                                    <td style="display: flex; justify-content: center; align-item:center;">
                                        <div class="restore">
                                            <form method="POST" action="{{ route('admin.restoresiswa', $bimbingan->id) }}">
                                                @csrf
                                                <button id="restore" type="submit" class="btn restore-button"
                                                    style="color: #FEC048;">
                                                    <i class="fas fa-undo-alt"></i>
                                                </button>
                                            </form>
                                        </div>


                                        <div class="hapuspermanen">
                                            <button id="delete" type="button" class="btn delete-button"
                                                style="color: #EF4F4F" data-toggle="modal"
                                                data-target="#modalHapuspermanen{{ $bimbingan->id }}">
                                                <i class="far fa-trash-alt"></i>
                                            </button>

                                            <div class="modal fade" id="modalHapuspermanen{{ $siswa->id }}"
                                                role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body"
                                                            style="display: flex; align-items:center; justify-content:center; text-align:center; ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                                height="50" style="color:#EF4F4F" fill="currentColor"
                                                                class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                <path
                                                                    d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                                            </svg>
                                                        </div>
                                                        <form method="POST"
                                                            action="{{ route('admin.datasiswadelete', $siswa->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <p
                                                                style="display: flex; align-items:center; justify-content:center; text-align:center; font-weight:600; font-size:20px">
                                                                Hapus data terpilih secara permanen?</p>
                                                            <div class="modalfoot mt-1 mb-3"
                                                                style="display:flex; justify-content: center; align-items:center;">
                                                                <button type="button" class="btn mr-2" data-dismiss="modal"
                                                                    style="background-color: #EF4F4F; color: #ffffff; font-size: 16px;">Tidak</button>
                                                                <button type="submit" class="btn ml-2"
                                                                    style="background-color: #44B158; color: #ffffff; font-size: 16px; font-family: Poppins;">Ya,
                                                                    Hapus Saja!</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="terpilih">
                    <form id="restoreForm" method="POST" action="{{ route('admin.handleselectedsiswa') }}">
                        @csrf
                        <input type="hidden" name="action" value="restore">
                        @foreach ($deletedSiswa as $siswa)
                            <input type="hidden" name="selectedIds[]" class="selected-item"
                                value="{{ $siswa->id }}">
                        @endforeach
                        <button id="restoreButton" type="submit" class="btn mt-3"
                            style="background-color: #FEC048; 
                    color: #ffffff; font-size: 16px;"
                            disabled>Restore Item</button>
                    </form>

                    <form id="deleteForm" method="POST" action="{{ route('admin.handleselectedsiswa') }}">
                        @csrf
                        <input type="hidden" name="action" value="delete">
                        @foreach ($deletedSiswa as $siswa)
                            <input type="hidden" name="selectedIds[]" class="selected-item"
                                value="{{ $siswa->id }}">
                        @endforeach
                        <button id="deleteButton" type="submit" class="btn mt-3 ml-2"
                            style="background-color: #EF4F4F; 
                    color: #ffffff; font-size: 16px;"
                            disabled>Delete Item</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

@stop
