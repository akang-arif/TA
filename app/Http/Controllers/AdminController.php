<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    
    public function index4(Request $request)
    {
        if ($request -> has('cari'))
        {
            $data_admin = \App\admin::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }

            else
            {
                $data_admin = \App\Admin::all();
            }
       
    	
    	return view('admin.index4',['data_admin' => $data_admin]);
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
        $user ->role = 'admin';
        $user ->name = $request->nama;
        $user ->email = $request->email;
        $user ->password = bcrypt('123');
        $user ->remember_token = Str::random(60);
        $user ->save();

        //insert ke table admin
        $request->request->add(['user_id' => $user->id]);
        $admin = \App\Admin::create($request->all());

        if ($request->hasFile('avatar')) 
            {
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $admin->avatar = $request->file('avatar')->getClientOriginalName();
                $admin -> save();
            }
            
        return redirect('admin1')->with('sukses','Data Berhasil Di Masukan');
    }

    public function update(Request $request,$id)
    {
        $admin = \App\Admin::find($id);
        $admin -> update($request->all());
        if ($request->hasFile('avatar')) 
            {
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $admin->avatar = $request->file('avatar')->getClientOriginalName();
                $admin -> save();
            }
        return redirect('/admin1')->with('sukses','Data Berhasil Di Ubah');
    }

    public function edit($id)
    {
        $admin = \App\Admin::find($id);
        return view('admin/edit',['admin' => $admin]);
    }

    public function profile($id)
    {
        $admin =\App\Admin::find($id);
        return view('admin/profile',['admin' => $admin]);
    }

    public function delete($id)
    {
        $admin = \App\Admin::find($id);
        $admin ->delete();
        $admin ->user->delete();
        return redirect('/admin1') -> with('sukses','Data Berhasil Di Hapus');
    }
    
    public function close()
    {
        return redirect('/admin1') -> with('sukses','Data Tidak Di Ubah');
    }

}
