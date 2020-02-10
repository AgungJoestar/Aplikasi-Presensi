<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Mapel;

class MapelController extends Controller
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
        $mapel = Mapel::all();
        return view('admin/mapel/mapel', ['mapel' => $mapel]);
    }
    
    /*public function show(mapel $id)
    {
        return view('mapel.show', ['mapel' => $id]);
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
        return view('admin/mapel/create');
    }

        public function store()
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
        $mapel = new Mapel;
        
        $mapel->kode = request('kode');
        $mapel->nama = request('nama');
        // $mapel->email = request('email');
        // $mapel->alamat = request('alamat');
        // $mapel->tempat_lahir = request('tempat_lahir');
        // $mapel->tgl_lahir = request('tgl_lahir');
        // $mapel->no_telp = request('no_telp');
        //$mapel->image = request()->file('image')->store('public/images');
        $mapel->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/mapel');
    }
        public function hapus($id_mapel)
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
        DB::table('mapel')->where('id_mapel',$id_mapel)->delete();
        
    // alihkan halaman ke halaman guru
        return redirect('/mapel');
    }
}
