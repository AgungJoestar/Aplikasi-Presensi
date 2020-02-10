<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Guru;
use App\Kelas;
use DB;
use PDF;

class WaliKelasController extends Controller
{
    
    public function index()
    {
        
        $guru = Guru::all();
        return view('admin/wali_kelas/wali_kelas', ['guru' => $guru]);
    }

    public function tambah()
    {
        $guru = DB::table('guru')->get();
        $kelas = DB::table('kelas')->get();

        return view('/admin/wali_kelas/create', ['guru' => $guru],['kelas'=>$kelas]);
    }

    public function update(Request $request)
    {

        DB::table('guru')->where('nip',$request->nip)->update([
        'id_kelas' => $request->id_kelas
        
        ]);


         return redirect('/walikelas');
    }

     public function hapus($guru)
    {
        DB::table('guru')->where('nip',$guru)->update([
        'id_kelas' =>''
        ]);
        
    // alihkan halaman ke halaman guru
        return redirect('/walikelas');
    }

    public function cetak_pdf()
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
        $guru= Guru::all();

        $gpdf = PDF::loadview('admin/wali_kelas/wali_kelasPDF',['guru'=>$guru]);
        return $gpdf->download('daftar-walikelas-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
}
