<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isReguler')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
        $user = User::all();
        return view('admin/admin/admin', ['user' => $user]);
    }
    
    /*public function show(kelas $id)
    {
        return view('kelas.show', ['kelas' => $id]);
    }*/
    
    public function create()
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isReguler')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
        return view('admin/admin/create');
    }

    public function store(Request $request)
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isReguler')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
        date_default_timezone_set("Asia/Bangkok");
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt ($request->password),
            'user_type'=>$request->user_type
        ]);

        \Session::flash('flash_message','successfully saved.');
        return redirect('/admin');

    }

    public function hapus($user)
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isReguler')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
        DB::table('users')->where('id',$user)->delete();
        
    // alihkan halaman ke halaman guru
        return redirect('/admin');

    }

    // method untuk edit data pegawai
    public function edit($user)
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isReguler')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
        // mengambil data pegawai berdasarkan id yang dipilih
        DB::table('users')->where('id',$user)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('/admin/admin/edit',['users' => $user]);

    }

    public function update(Request $request)
    {
    // update data pegawai
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isReguler')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
    date_default_timezone_set("Asia/Bangkok");
    DB::table('users')->where('id',$request->id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt ($request->password),
        'user_type'=>$request->user_type
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/admin');
}
}
