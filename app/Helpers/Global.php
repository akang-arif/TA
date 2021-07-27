<?php


function totalAdmin()
{
    return \App\Admin::count();
}

function totalSiswa()
{
    return \App\Siswa::count();
}

function totalWalikelas()
{
    return \App\Walikelas::count();
}

function totalMapel()
{
    return \App\Mapel::count();
}

function totalKelas()
{
    return \App\Kelas::count();
}

// function namaWalikelas()
// {
//     $siswa = Auth::user->id;

//     $query1 = DB::table('siswa')
//     ->where('user_id','like',$siswa)
//     ->get();

//     // $query1 = DB::table('walikelas')
//     //         ->where('user_id','like',$walikelas)
//     //         ->get();
// }
function totalSiswaWali()
{
    // $siswa = Auth::user->id;
}