<!DOCTYPE html>
<html lang="en">
<head>

    <title>RAPOT ONLINE</title>
</head>
<body>
<table border="2" bordercolor="orange" width="400px" align="center">
    <tr>
        <td>
        <table border="0" width ="400px" align="center">
            <tr>
                <td ><img src="/xampp/htdocs/rapot-online/public/admin/assets/img/pgri.png" style="width: 15%"></td>
                <td width="600px" align="center" style="font-family: Trebuchet MS;">
                    <span style="font-size: 18px">YAYASAN PEMBINA LEMBAGA PENDIDIKAN DIKDASMEN PGRI</span> <br>
                    <span style="font-size: 18px"> PROVINSI KALIMANTAN TIMUR </span><br>
                    <b><span style="font-size: 30px">SMK TI PRATAMA PGRI SAMARINDA</span></b> <br>
                    <b><span style="font-size: 18px">PROGRAM KEAHLIAN : </span></b><br>
                    <b><span style="font-size: 18px">Teknik Komputer dan Jaringan (TKJ) - Multimedia (MM) </span></b><br>
                    <span style="font-size: 14px">Alamat : Jl. Kemakmuran Komp. Pelita 3 No. 05 RT. 41 Telp. 7772671</span>
                </td>
                <td></td>
                <td align="right"><img src="/xampp/htdocs/rapot-online/public/admin/assets/img/pratama.png" style="width: 13%;"></td>
            </tr>
        </table>
        
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="700px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td>Nama Peserta Didik</td>                    
                <td width>:</td>
                <td>{{$siswa->nama_depan}}</td>
                <td>Kelas</td>
                <td>:</td>
                <td>{{$siswa->kelas_siswa[0]->kelas->nama}}</td>
            </tr>

            <tr>
                <td colspan="6"></td>
            </tr>

            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td>Nomor Induk</td>                    
                <td>:</td>
                <td>186213123</td>
                <td>Jurusan</td>
                <td>:</td>
                <td>{{$siswa->kelas_siswa[0]->kelas->jurusan->nama}}</td>
            </tr>
            
        </table>

        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>

        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>

        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>

        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>

        
        
        <table border="1" width ="700px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <th width="50px" align="left">NO</th>
                <th width="200px">MATA PELAJARAN</th>
                <th width="100px">SKM</th>
                <th width ="150px">NILAI RAPOT</th>
            </tr>
            @php $i=1; @endphp
            {{-- @foreach ($dataMapel as $a) --}}
            @foreach ($nilai as $b)
            <tr align="center">
                <td align="left">{{$i++}}</td>
                
                <td style="font-family: Bahnschrift Condensed; font-size:17px;">{{$b->mapel->nama}}</td>
                <td>75</td>  
                <td>{{$b->nilai}}</td>             
            </tr>  
            @endforeach
        </table>
        <table border="0" width ="800px" align="center">
                <tr style="font-family: Trebuchet MS; font-size:17px">
                    <td></td>
                </tr>
        </table>
        
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>

        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>

        <table border="0" width ="750px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <th width="150px">Orangtua/Wali</th>
                <th></th>
                <th></th>
                <th width ="150px">Walikelas</th>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>
        <table border="0" width ="800px" align="center">
            <tr style="font-family: Trebuchet MS; font-size:17px">
                <td></td>
            </tr>
        </table>

        <table border="0" width ="750px" align="center">
        <tr>
                <th width="150px">{{$siswa->nama_orangtua}}</th>
                <th></th>
                <th></th>
                <th width ="150px">{{$siswa->kelas_siswa[0]->walikelas->nama}}</th>
        </tr>
         </table>

        </td>
    </tr>
    </table>
        
</body>
</html>