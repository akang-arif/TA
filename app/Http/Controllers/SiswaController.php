<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Siswa;
use App\Kelas;


class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $kelas = Kelas::all();
        if ($request -> has('cari'))
        {
            $data_siswa = \App\Siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }

        
            else
            {
                $data_siswa = \App\Siswa::all();
            }
       
    	$data =  $data_siswa;
    	return view('siswa.index',compact('data_siswa','kelas'));
    }
    public function create(Request $request)
    {   
        $this->validate($request, [
            'nama_depan' => 'required | min:2',
            'nama_belakang' => 'required',
            'email' => 'required | email |unique:users',
            'agama' => 'required',
            'avatar' => 'mimes:jpeg,png',
        ]);
        

        //insert ke tabel user
        $user = new \App\User;
        $user ->role = 'siswa';
        $user ->name = $request->nama_depan;
        $user ->email = $request->email;
        $user ->password = bcrypt('123');
        $user ->remember_token = Str::random(60);
        $user ->save();

        //insert ke table Siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\Siswa::create($request->all());

        if ($request->hasFile('avatar')) 
            {
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $siswa->avatar = $request->file('avatar')->getClientOriginalName();
                $siswa -> save();
            }
            
    	return redirect('siswa')->with('sukses','Data Berhasil Di Masukan');
    }
    

    public function edit($id)
    {
    	$siswa = \App\Siswa::find($id);
        $kelas = Kelas::all();
        return view('siswa/edit',compact('siswa','kelas'));
    }

    public function update(Request $request,$id)
    {
    	$siswa = \App\Siswa::find($id);
    	$siswa -> update($request->all());
        if ($request->hasFile('avatar')) 
            {
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $siswa->avatar = $request->file('avatar')->getClientOriginalName();
                $siswa -> save();
            }
    	return redirect('/siswa')->with('sukses','Data Berhasil Di Ubah');
    }

    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa ->delete();
        return redirect('/siswa') -> with('sukses','Data Berhasil Di Hapus');
    }
    
    public function close()
    {
        return redirect('/siswa') -> with('sukses','Data Tidak Di Ubah');
    }

    public function profile($id)
    {
        $siswa =\App\Siswa::find($id);
        $kelas_siswa = \App\Kelas_Siswa::all();
        // return $siswa;
        return view('siswa/profile',[
            'siswa' => $siswa,
            'kelas_siswa' => $kelas_siswa
            ]);
        
    }

    public function dataSiswa()
    {
        $walikelas = Auth::user()->id;
        
        $query1 = DB::table('walikelas')
            ->where('user_id','like',$walikelas)
            ->get();
        // return $query1;
        
        $query11 = $query1[0]->id;   
        // return $query11;
        //ke table kelas
        $query2 = DB::table('kelas_siswa')
            ->where('walikelas_id','like',$query11)
            ->get();

        for ($i=0; $i < count($query2); $i++) 
        { 
            $siswa1[$i] = $query2[$i]->siswa_id;  
        }
        
        $siswa = \App\Siswa::all();
        
        $dataSiswa = [];
        $i = 0;
        foreach($siswa as $item){
            if(in_array($item->id, $siswa1)){
                $dataSiswa[$i]=$item;
                $i++;
            }
        }
        // return $dataSiswa;
        
        return view('siswa.dataSiswa', compact(
            'dataSiswa'
        ));
    }

    public function getdatasiswa()
    {
        $siswa = \App\Siswa::select('siswa.*');

        return \DataTables::eloquent($siswa)->toJson();
    }



}


