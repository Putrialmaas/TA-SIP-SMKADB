<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Monitoring</title>
    <style type="text/css">
        @media print {
            @page {
                size: a4 portrait;
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>
{{-- onload="window.print()" --}}

<body onload="window.print()">
    <section class="page1">
        <div class="kepala">
            <table align="center">
                <tr>
                    <td colspan="2" height="15"></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('assets/img/logoJateng.png') }}" width="80" height="80" /></td>
                    <td>
                        <center>
                            <font size="3"><b>PEMERINTAH PROVINSI JAWA TENGAH</b></font><br>
                            <font size="3"><b>DINAS PENDIDIKAN DAN KEBUDAYAAN</b></font><br>
                            <font size="4"><b>SEKOLAH MENENGAH KEJURUAN NEGERI 1 ADIWERNA</b></font><br>
                            <font size="1">JL. Raya II Po Box 24, Telp : (0283) 443768, Fax: (0283) 445494
                                Adiwerna
                                52194
                                Kab. Tegal</font><br>
                            <font size="1">website: smkn1adw.sch.id, e-mail: mail@smkn1adw.sch.id</font>
                        </center>

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style=" border: 2px solid #000000;">
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <table align="center">

            <tr>
                <td width="15">Nomor</td>
                <td width="10"> :</td>
                <td width="203"> 423.4 /..... / 2024 </td>
                <td rowspan="5" width="30"></td>
                <td>Adiwerna, ...........................................</td>
                <td rowspan="5" width="20"></td>
            </tr>
            <tr>
                <td width="15">Lamp.</td>
                <td width="10"> :</td>
                <td width="203">1 eks.</td>
            </tr>
            <tr>
                <td width="15">Hal</td>
                <td width="10"> :</td>
                <td colspan="2" width="203"><b><i><u>Monitoring Keja Siswa/Siswi Praktik Kerja Lapangan
                                (PKL)</b></i></u></td>
            </tr>

            <tr>
                <td height="30" colspan="6"></td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td width="250" align="justify">Kepada Yth. Pimpinan
                    <br>
                    <b>{{ $dataBimbingans[0]['permohonan']->tempat_prakerin }}</b>
                    <br>
                    {{ $dataBimbingans[0]['permohonan']->alamat_tempat_prakerin }}
                    <br>
                    di _
                    <br>
                    <center>Tempat</center>
                </td>
            </tr>
            <tr>
                <td height="20" colspan="6"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="4" align="justify" width="300" style="margin-bottom: 0px;">Dengan hormat,
                    <div class="isi">
                        <p style="text-indent: 30px; text-align: justify; margin-top: 5px; margin-bottom:0px">
                            Menindaklanjuti pelaksanaan kegiatan Praktik Kerja Lapangan (PKL) peserta didik kelas XII
                            untuk Konsentrasi Keahlian Teknik Komputer dan Jaringan tahun pelajaran 2023/2024 akan telah
                            berjalan di Instansi/Industri/Perusahaan
                            <b>{{ $dataBimbingans[0]['permohonan']->tempat_prakerin }}</b> yang Bapak/Ibu
                            pimpin.
                        </p>
                        <p style="text-indent: 30px; margin-top: 5px; margin-bottom: 0px">
                            Selanjutnya kami sampaikan penghargaan dan terimakasih atas kesempatan yang telah diberikan
                            kepada siswa/siswi kami yang telah melaksanakan kegiatan PKL di
                            <b>{{ $dataBimbingans[0]['permohonan']->tempat_prakerin }}</b>
                            , sehingga kegiatan ini dapat terlaksana sebagaimana mestinya.Sebagai tambahan informasi,
                            dalam minggu-minggu ini kami akan menugaskan Tim Pendamping dalam rangka kegiatan monitoring
                            pelaksanaan PKL. Kegiatan ini dilakukan untuk melihat sejauh mana kinerja siswa-siswi kami
                            dalam melaksnaakan kegiatan PKL, kegiatan monitoring ini juga sebagai bentuk diskusi,
                            evaluasi dari pihak Sekolah dengan Industri.
                        </p>
                    </div>
                    <div class="penutup">
                        <p style="text-indent: 30px; margin-top: 5px; margin-bottom: 0px">
                            Demikian surat ini kami sampaikan, atas perhatian dan kerjasamanya disampaikan terimakasih.
                        </p>
                    </div>
                </td>
            </tr>
            <tr colspan="4">
                <td colspan="4"></td>
                <td colspan="2">
                    <div class="ttd">
                        <br>
                        <ul style="list-style-type: none; text-indent:20px;">
                            <li>Kepala Sekolah,</li>
                            <br>
                            <br>
                            <br>
                            <br>
                            <b>
                                <li style="text-decoration:underline;">Imron Effendi,S.P. M.Pd</li>
                            </b>
                            <li>NIP. 19640316 198803 1 013</li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </section>
</body>

</html>
