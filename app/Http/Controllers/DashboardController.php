<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Siswa;
use Illuminate\Support\Facades\DB;
use Auth;


class DashboardController extends Controller
{
    public function index()
    {

        // $siswa = \App\Siswa::all();
        $user = Auth::user()->id;
        
       
        // return $siswa2;
        if (auth() ->user()-> role == 'admin') 
        {
        $admin1 = DB::table('admin')
            ->where('user_id','like',$user)
            ->get();
        
        $admin2 = $admin1[0]->id;
        return view('dashboard/index',compact(
           'admin2','admin1'));
        }

        if (auth() ->user()-> role == 'walikelas') 
    {
        return view('dashboard/index') ;
        }
        
       
        if (auth() ->user()-> role == 'siswa') 
        {
            $siswa1 = Auth::user()->id;

            // $siswa2 = \App\Siswa::where('user_id','=',$siswa1)->get();
            // return $siswa2;
            $query1 = DB::table('siswa')
                ->where('user_id','like',$siswa1)
                ->get();
            
            $query11 = $query1[0]->id; 
            

            $query2 = DB::table('kelas_siswa')
            ->where('siswa_id','like',$query11)
            ->get();
            
            $query22 = $query2[0]->walikelas_id;
            
            $walikelas = DB::table('walikelas')
                ->where('id','like',$query22)
                ->paginate();

            $query3 = DB::table('kelas_siswa')
            ->where('siswa_id','like',$query11)
            ->get();
            
            $query33 = $query3[0]->kelas_id;
            
            $kelas = DB::table('kelas')
                ->where('id','like',$query33)
                ->paginate();
            
            return view('dashboard/index',compact(
                'walikelas','kelas','query1'
            ));
        }
        

        return view('dashboard/index',compact(
            'siswa'));
        
               
    }

    public function profile($id)
    {
       

        $walikelas =\App\Walikelas::find($id);
        $admin =\App\Admin::find($id);
        $siswa =\App\Siswa::find($id);
        $kelas = \App\Kelas::all();
        $kelas_siswa = \App\Kelas_Siswa::all();
        // return $admin;
        return view('dashboard/profile',compact(
            'walikelas','admin','siswa','kelas','kelas_siswa'
        ));

    }

    public function edit($id)
    {
       

        $walikelas =\App\Walikelas::find($id);
        $admin =\App\Admin::find($id);
        $siswa =\App\Siswa::find($id);
        // return $admin;
        return view('dashboard/edit',compact(
            'walikelas','admin','siswa'
        ));

    }

    public function update(Request $request,$id)
    {
        
        if (auth() ->user()-> role == 'siswa') 
        {
            $siswa = \App\Siswa::find($id);
            $siswa -> update($request->all());
            if ($request->hasFile('avatar')) 
            {
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $siswa->avatar = $request->file('avatar')->getClientOriginalName();
                $siswa -> save();
            }
        }
    	
            
        
        
        if (auth() ->user()-> role == 'admin') 
        {
            $admin = \App\Admin::find($id);
    	    $admin -> update($request->all());
            if ($request->hasFile('avatar')) 
                {
                    $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                    $admin->avatar = $request->file('avatar')->getClientOriginalName();
                    $admin -> save();
                }
        }

        
        
        if (auth() ->user()-> role == 'walikelas') 
        {
            $walikelas = \App\Walikelas::find($id);
            $walikelas -> update($request->all());
            if ($request->hasFile('avatar')) 
            {
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $walikelas->avatar = $request->file('avatar')->getClientOriginalName();
                $walikelas -> save();
            }
        }
       

    	return redirect('/dashboard')->with('sukses','Data Berhasil Di Ubah');
    }

    public function close()
    {
        return redirect('/dashboard') -> with('sukses','Data Tidak Di Ubah');
    }


}
