@extends('layout/master')
@section('content')

<v class="main">
<div class="container-fluid">
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">

                <div class="panel">

        <div class="row">
            <div class="col-md-12">
                                <div class="panel-heading">
                                <div class="panel-body">
                                @if(auth() ->user()-> role == 'admin')
                                <table >
                                    <tr>
                                        <th width="1000px">
                                            <h2 class="panel-title">Bantuan Admin</h2>
                                        </th>
                                    </tr>


                                </table>
                                <br><br><br>

                                <table>
                                    <tr>
                                        <h4 class="panel-title">Halaman Data Siswa</h4><br>
                                        Untuk Halaman ini berguna untuk memasukan data siswa baru dan sekaligus mendaftarkan user siswa ke aplikasi <br>

                                    </tr>
                                    <br>
                                    <tr>
                                        <h4 class="panel-title">Halaman Data Walikelas</h4><br>
                                        Untuk Halaman ini berguna untuk memasukan data walikelas dan data juga sekaligus di daftarkan untuk sebagai user Walikelas ke aplikasinya <br>
                                    </tr>
                                    <br>
                                    <tr>
                                        <h4 class="panel-title">Halaman Data Admin</h4><br>
                                        Untuk Halaman ini berguna untuk memasukan data admin dan membuatkan user untuk di daftarkan ke aplikasi <br>
                                    </tr>
                                    <br>
                                    <tr>
                                        <h4 class="panel-title">Akademik</h4><br>
                                        Di dalam akademik terdiri atas 4 komponen
                                        <ul>
                                            <li>Mata Pelajaran</li>
                                            Untuk membuat mata pelajaran di sini berguna untuk memasukan data mata pelajaran
                                            <li>Kelas</li>
                                            Untuk membuat sebuah kelas dan memberikan sebuah walikelas di dalam kelasnya
                                            <li>Kelas Siswa</li>
                                            Untuk Kelas Siswa ini berguna untuk memasukan siswa ke dalam kelas sesuai dengan kelas mereka
                                            <li>Kelas Mapel</li>
                                            Untuk Kelas Mapel di sini berguna untuk memasukan MataPelajaran yang sesuai dengan masing-masing kelas
                                        </ul> <br>
                                    </tr>
                                </table>
                                @endif

                                @if(auth() ->user()-> role == 'walikelas')
                                <table >
                                    <tr>
                                        <th width="1000px">
                                            <h2 class="panel-title">Bantuan Walikelas</h2>
                                        </th>
                                    </tr>


                                </table>
                                <br><br><br>

                                <table>
                                    <tr>
                                        <h4 class="panel-title">Halaman Data Siswa</h4><br>
                                        Untuk mengedit data siswa apa bila ada kesalahan data yang di input oleh admin<br>

                                    </tr>
                                    <br>
                                    <tr>
                                        <h4 class="panel-title">Akademik</h4><br>
                                        Di dalam akademik terdiri atas 1 komponen
                                        <ul>
                                            <li>Nilai</li>
                                            Di sini untuk menginputkan Nilai sesuai dengan Ganjil dan Genap Serta MataPelajarannya
                                        </ul> <br>
                                    </tr>

                                    <tr>
                                        <h4 class="panel-title">Halaman Cetak</h4><br>
                                        Di sini Menu Cetak untuk mencetak Rapot Siswa<br>

                                    </tr>
                                    <br>
                                </table>
                                @endif

                                </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@stop