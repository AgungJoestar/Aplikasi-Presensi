<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Kelas;
use App\SiswaModel;
use DB;
use PDF;

class KelasController extends Controller
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
        $kelas = Kelas::all()->sortBy('nama');
        return view('admin/kelas/kelas', ['kelas' => $kelas]);
    }
    
    public function show($id)
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
        $kelas = DB::select('select * from kelas where id = ?', [$id]);
        if((DB::table('kelas')->where('id','=',$id)->value('jenis_kelas'))=='Reguler')
            $siswa = DB::select('select * from siswa where id_kelas = ?', [$id]);
        else if((DB::table('kelas')->where('id','=',$id)->value('jenis_kelas'))=='Pascamubaligh')
            $siswa = DB::select('select * from siswa where id_pascamubaligh = ?', [$id]);
        else if((DB::table('kelas')->where('id','=',$id)->value('jenis_kelas'))=='Pramubaligh')
            $siswa = DB::select('select * from siswa where id_pramubaligh = ?', [$id]);
        else if((DB::table('kelas')->where('id','=',$id)->value('jenis_kelas'))=='Bimbel')
            $siswa = DB::select('select * from siswa where id_bimbel = ?', [$id]);
        else if((DB::table('kelas')->where('id','=',$id)->value('jenis_kelas'))=='Pesantren')
            $siswa = DB::select('select * from siswa where id_pesantren = ?', [$id]);
        // return $test;
        return view('admin.kelas.show', ['kelas' => $kelas], ['siswa' => $siswa]);
    }
    
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
        return view('admin/kelas/create');
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
        $kelas = new Kelas;
        
        $kelas->kode_kelas = request('kode_kelas');
        $kelas->nama = request('nama');
        $kelas->jenis_kelas = request('jenis_kelas');
        // $kelas->prapasca = request('prapasca');
        $kelas->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/kelas');
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
        $kelas= Kelas::all();

        $gpdf = PDF::loadview('admin/kelas/kelasPDF',['kelas'=>$kelas]);
        return $gpdf->download('daftar-kelas-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }

        public function showAnggota($id)
    {
        $siswa = DB::table('siswa')->get();
        $kelas = DB::table('kelas')->where('id',$id)->get();
        // return $kelas;

        return view('/admin/kelas/anggota', ['siswa' => $siswa],['kelas'=>$kelas]);
    }

        public function updateAnggota(Request $request)
    {

            // return $request->jenis_kelas;
        $counter = count(request('nis'));
        $nis = request('nis');
        if(request('jenis_kelas')=='Reguler'){
            for ( $i=0; $i< $counter; $i++) {
                DB::table('siswa')->where('nis',$nis[$i])->update([
                'id_kelas' => $request->id_kelas
                ]);
            }
        }
        else if(request('jenis_kelas')=='Pramubaligh'){
            for ( $i=0; $i< $counter; $i++) {
                DB::table('siswa')->where('nis',$nis[$i])->update([
                'id_pramubaligh' => $request->id_kelas
                ]);
            }
        }
        else if(request('jenis_kelas')=='Pascamubaligh'){
            for ( $i=0; $i< $counter; $i++) {
                DB::table('siswa')->where('nis',$nis[$i])->update([
                'id_pascamubaligh' => $request->id_kelas
                ]);
            }
        }
        else if(request('jenis_kelas')=='Pesantren'){
            for ( $i=0; $i< $counter; $i++) {
                DB::table('siswa')->where('nis',$nis[$i])->update([
                'id_pesantren' => $request->id_kelas
                ]);
            }
        }
        else if(request('jenis_kelas')=='Bimbel'){
            for ( $i=0; $i< $counter; $i++) {    
                DB::table('siswa')->where('nis',$nis[$i])->update([
                'id_bimbel' => $request->id_kelas
                ]);
            }
        }

         return redirect('/kelas');
    }

        public function delete($id_kelas)
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
        DB::table('kelas')->where('id',$id_kelas)->delete();
        
        return redirect('/kelas');
    }
}
