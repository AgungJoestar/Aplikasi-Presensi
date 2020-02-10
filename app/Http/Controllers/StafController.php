<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Staf;
use PDF;
use DB;


class StafController extends Controller
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
        // elseif(!\Gate::allows('isBimbel')){
        //     abort(403,"Sorry, You can't access here");
        // }
        // else{
        //     return redirect('/home');
        // }
        $staf = Staf::all();
        return view('admin/staf/staf', ['staf' => $staf]);
    }
    
    public function show(Staf $nip_staf)
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

        if((DB::table('absenstaf')->select(DB::raw('count(*) as absen_count'))->where('nip_staf','=',$nip_staf->nip_staf)->value('absen_count'))>0){
            $hadirMax = DB::table('absenstaf')
                         ->select(DB::raw('count(*) as absen_count'))
                         ->where('nip_staf','=',$nip_staf->nip_staf)
                         ->value('absen_count');
            // return $hadirMax;
            $hadirlist = DB::table('absenstaf')
                         ->select(DB::raw('count(*) as absen_count'))
                         ->where([
                            ['absen_staf', '=', 'hadir'],
                            ['nip_staf', '=', $nip_staf->nip_staf]
                        ])
                         // ->groupBy('status')
                         ->value('absen_count');
            $hadirPersen = ($hadirlist/$hadirMax)*100; 
        }
        else{
            $hadirPersen = 0;
        }

        return view('admin.staf.show', ['staf' => $nip_staf], ['hadirPersen' => $hadirPersen]);
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
        return view('admin/staf/create');
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

        if (Staf::where('nip_staf', '=', request('nip_staf'))->count() > 0) {
            \Session::flash('flash_message_fail','Duplicate Entry : ID');

            return redirect('/staf');
        }

        $staf = new Staf;
        $staf->nip_staf = request('nip_staf');
        $staf->nama_staf = request('nama_staf');
        $staf->email_staf = request('email_staf');
        $staf->alamat_staf = request('alamat_staf');
        $staf->tempat_lahir_staf = request('tempat_lahir_staf');
        $staf->tgl_lahir_staf = request('tgl_lahir_staf');
        $staf->no_telp_staf = request('no_telp_staf');
        $staf->tgl_masuk_staf = request('tgl_masuk_staf');
        $staf->pend_terakhir_staf = request('pend_terakhir_staf');
        $staf->jabatan_staf = request('jabatan_staf');
        $staf->boarding_staf = request('boarding_staf');
        $staf->status_nikah_staf = request('status_nikah_staf');
        $staf->jumlah_kel_staf = request('jumlah_kel_staf');
        // if(!is_null($request->file('image'))){
        //     $file = $request->file('image')->store('public/files/staf');
        //     $filename = $request->file('image')->hashName();
        //     $format = $request->file('image')->getClientOriginalExtension();
        //     $staf->image = $filename;
        // }
        if(!is_null($request->file('image'))){
            $filename = $request->file('image')->hashName();
            $format = $request->file('image')->getClientOriginalExtension();
            $file = $request->file('image')->move('images/file',$filename);
            $staf->image = $filename;
        }

        $staf->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/staf');
    }

    // public function edit(staf $id){
    //     $staf = staf::all();
    //     return view('admin.staf.show', ['staf' => $id]);
    // }

   

   

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
        $staf= staf::all();

        $gpdf = PDF::loadview('admin/staf/stafPDF',['staf'=>$staf]);
        return $gpdf->download('daftar-staf-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }

    public function cetak_profil_pdf(Staf $nip_staf)
    {
        // return $id;
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
        $gpdf = PDF::loadview('admin/staf/profilstafPDF',['staf'=>$nip_staf]);
        return $gpdf->download('profil-staf-'.$nip->value("nama")."-".date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
    public function hapus($staf)
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
        DB::table('staf')->where('nip_staf',$staf)->delete();
        
    // alihkan halaman ke halaman staf
        return redirect('/staf');
    }

    public function edit ($nip_staf)
    {
/*      
        $useredit = DB::select('select * from siswa where nis = ?',[$nis]);  


        return view('admin.siswa.edit',['useredit'=>$useredit]);
*/

       
       $staf = DB::table('staf')
        ->where('nip_staf', $nip_staf)
        ->get(); 
   
       return view('admin.staf.edit', ['staf'=>$staf]);


    }

    public function update(Request $request, $nip_staf)
    {
        $selected_nip = Staf::where('nip_staf', '=', $nip_staf)->value('nip_staf');
        // return $request->nip;
        if($selected_nip!=$request->nip_staf){
            if (Staf::where('nip_staf', '=', $request->nip_staf)->count() > 0) {
                \Session::flash('flash_message_fail','Duplicate Entry : NIP');

                return redirect('/staf');
            }
        }

        if(!is_null($request->file('image'))){
            $filename = $request->file('image')->hashName();
            // $filename = $request->file('image')->hashName();
            $format = $request->file('image')->getClientOriginalExtension();
            $file = $request->file('image')->move('images/file',$filename);
            // return $request->file('image');
            DB::table('staf')->where('nip_staf',$nip_staf)->update([          
                'image' => $filename
            ]);
        }

        DB::table('staf')->where('nip_staf',$nip_staf)->update([
        'nip_staf' => $request->nip_staf,
        'nama_staf' => $request->nama_staf,
        'email_staf' => $request->email_staf,
        'alamat_staf' => $request->alamat_staf,
        'tempat_lahir_staf' => $request->tempat_lahir_staf,
        'tgl_lahir_staf' => $request->tgl_lahir_staf,
        'no_telp_staf' => $request->no_telp_staf,
        'tgl_masuk_staf' => $request->tgl_masuk_staf,
        'pend_terakhir_staf' => $request->pend_terakhir_staf,
        'jabatan_staf' => $request->jabatan_staf,
        'boarding_staf' => $request->boarding_staf,
        'status_nikah_staf' => $request->status_nikah_staf,
        'jumlah_kel_staf' => $request->jumlah_kel_staf
        
        ]);


         return redirect('/staf');
    }
}
