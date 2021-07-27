<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Walikelas;
use App\Kelas;

class WalikelasController extends Controller
{

    public function index3(Request $request)
    {
        // $walikelas = Walikelas::all();
        // return $walikelas->kelas;
        $kelas = Kelas::all();
        if ($request -> has('cari'))
        {
            $data_walikelas = \App\Walikelas::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }

            else
            {
                $data_walikelas = \App\Walikelas::all();
            }
       
        $data =  $data_walikelas;
        // return $data->find(3)->kelas;
        // disini bisa di view kok raiso wkwk wkkwkw
        // return $data;
    	return view('walikelas/index3',compact('data_walikelas','kelas'));
    }

    public function create(Request $request)
    {   
        $this->validate($request, [
            'email' => 'required | email |unique:users',
            'agama' => 'required',
            'avatar' => 'mimes:jpeg,png',

        ]);
        

        //insert ke tabel user
        $user = new \App\User;
        $user ->role = 'walikelas';
        $user ->name = $request->nama;
        $user ->email = $request->email;
        $user ->password = bcrypt('123');
        $user ->remember_token = Str::random(60);
        $user ->save();

        //insert ke table Siswa
        $request->request->add(['user_id' => $user->id]);
        // return $request; 

        $walikelas = \App\walikelas::create($request->all());

        if ($request->hasFile('avatar')) 
            {
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $siswa->avatar = $request->file('avatar')->getClientOriginalName();
                $siswa -> save();
            }
           
        return redirect('walikelas')->with('sukses','Data Berhasil Di Masukan');
    }

    public function update(Request $request,$id)
    {
        $siswa = \App\Walikelas::find($id);
        $siswa -> update($request->all());
        if ($request->hasFile('avatar')) 
            {
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $siswa->avatar = $request->file('avatar')->getClientOriginalName();
                $siswa -> save();
            }
        return redirect('/walikelas')->with('sukses','Data Berhasil Di Ubah');
    }

    public function edit($id)
    {
        $walikelas = \App\Walikelas::find($id);
        $kelas = Kelas::all();
        return view('walikelas/edit',compact('walikelas','kelas'));
    }

    public function profile($id)
    {
        $walikelas =\App\Walikelas::find($id);
        $kelas = \App\Kelas::all();
        return view('walikelas/profile',[
            'walikelas' => $walikelas,
            'kelas' => $kelas,
            ]);
    }

    public function delete($id)
    {
        $walikelas = \App\Walikelas::find($id);
        // return $walikelas->user
        $walikelas ->delete();
        $walikelas->user->delete();
        return redirect('/walikelas') -> with('sukses','Data Berhasil Di Hapus');
    }
    
    public function close()
    {
        return redirect('/walikelas') -> with('sukses','Data Tidak Di Ubah');
    }
}
