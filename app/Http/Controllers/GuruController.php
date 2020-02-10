<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Guru;
use PDF;
use DB;


class GuruController extends Controller
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
        $guru = Guru::all();
        return view('admin/guru/guru', ['guru' => $guru]);
    }
    
    public function show(Guru $nip)
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

        if((DB::table('absensiguru')->select(DB::raw('count(*) as absen_count'))->where('nip','=',$nip->nip)->value('absen_count'))>0){
            $hadirMax = DB::table('absensiguru')
                         ->select(DB::raw('count(*) as absen_count'))
                         ->where('nip','=',$nip->nip)
                         ->value('absen_count');
            // return $hadirMax;
            $hadirlist = DB::table('absensiguru')
                         ->select(DB::raw('count(*) as absen_count'))
                         ->where([
                            ['absen', '=', 'hadir'],
                            ['nip', '=', $nip->nip]
                        ])
                         // ->groupBy('status')
                         ->value('absen_count');
            $hadirPersen = ($hadirlist/$hadirMax)*100; 
        }
        else{
            $hadirPersen = 0;
        }

        return view('admin.guru.show', ['guru' => $nip], ['hadirPersen' => $hadirPersen]);
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
        return view('admin/guru/create');
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

        if (Guru::where('nip', '=', request('nip'))->count() > 0) {
            \Session::flash('flash_message_fail','Duplicate Entry : NIP');

            return redirect('/guru');
        }

        $guru = new Guru;
        $guru->nip = request('nip');
        $guru->nama = request('nama');
        $guru->email = request('email');
        $guru->alamat = request('alamat');
        $guru->tempat_lahir = request('tempat_lahir');
        $guru->tgl_lahir = request('tgl_lahir');
        $guru->no_telp = request('no_telp');
        $guru->tgl_masuk = request('tgl_masuk');
        $guru->pend_terakhir = request('pend_terakhir');
        $guru->jabatan = request('jabatan');
        $guru->boarding = request('boarding');
        $guru->status_nikah = request('status_nikah');
        $guru->jumlah_kel = request('jumlah_kel');
        // if(!is_null($request->file('image'))){
        //     $file = $request->file('image')->store('public/files/guru');
        //     $filename = $request->file('image')->hashName();
        //     $format = $request->file('image')->getClientOriginalExtension();
        //     $guru->image = $filename;
        // }
        if(!is_null($request->file('image'))){
            $filename = $request->file('image')->hashName();
            $format = $request->file('image')->getClientOriginalExtension();
            $file = $request->file('image')->move('images/file',$filename);
            $guru->image = $filename;
        }

        $guru->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/guru');
    }

    // public function edit(Guru $id){
    //     $guru = Guru::all();
    //     return view('admin.guru.show', ['guru' => $id]);
    // }

    public function edit ($nip)
    {
      
       $guru = DB::table('guru')
        ->where('nip', $nip)
        ->get(); 
   
       return view('admin.guru.edit', ['guru'=>$guru]);


    }

    public function update(Request $request, $nip)
    {
        $selected_nip = Guru::where('nip', '=', $nip)->value('nip');
        // return $request->nip;
        if($selected_nip!=$request->nip){
            if (Guru::where('nip', '=', $request->nip)->count() > 0) {
                \Session::flash('flash_message_fail','Duplicate Entry : NIP');

                return redirect('/guru');
            }
        }

        if(!is_null($request->file('image'))){
            $filename = $request->file('image')->hashName();
            // $filename = $request->file('image')->hashName();
            $format = $request->file('image')->getClientOriginalExtension();
            $file = $request->file('image')->move('images/file',$filename);
            // return $request->file('image');
            DB::table('guru')->where('nip',$nip)->update([          
                'image' => $filename
            ]);
        }

        DB::table('guru')->where('nip',$nip)->update([
        'nip' => $request->nip,
        'nama' => $request->nama,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'tempat_lahir' => $request->tempat_lahir,
        'tgl_lahir' => $request->tgl_lahir,
        'no_telp' => $request->no_telp,
        'tgl_masuk' => $request->tgl_masuk,
        'pend_terakhir' => $request->pend_terakhir,
        'jabatan' => $request->jabatan,
        'boarding' => $request->boarding,
        'status_nikah' => $request->status_nikah,
        'jumlah_kel' => $request->jumlah_kel
        
        ]);

        return redirect('/guru');
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

        $gpdf = PDF::loadview('admin/guru/guruPDF',['guru'=>$guru]);
        return $gpdf->download('daftar-guru-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }

    public function cetak_profil_pdf(Guru $nip)
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
        $gpdf = PDF::loadview('admin/guru/profilguruPDF',['guru'=>$nip]);
        return $gpdf->download('profil-guru-'.$nip->value("nama")."-".date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
    public function hapus($guru)
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
        DB::table('guru')->where('nip',$guru)->delete();
        
    // alihkan halaman ke halaman guru
        return redirect('/guru');
    }
}
