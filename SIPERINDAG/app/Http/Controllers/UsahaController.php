<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use Illuminate\Http\Request;

class UsahaController extends Controller
{
    public function index()
    {
    	return view('usaha.form');
    }
    public function form(Request $req)
    {
    	$userID = Auth()->user()->id;

    	if ($req->aset<50000000) {
    		$golongan = 'Usaha Mikro';
    	}else if ($req->aset>=50000000 && $req->aset<=500000000) {
    		$golongan = 'Usaha Kecil';
    	}else if ($req->aset>=500000000 && $req->aset<=10000000000) {
    		$golongan = 'Usaha Menengah';
    	}

    	$du = new \App\DataUsaha;
    	$du->id = mt_rand(1000,9999);
    	$du->wirausaha_id = $userID;
    	$du->nama_usaha = $req->nama_usaha;
    	$du->aset = $req->aset;
    	$du->jenis_usaha = $req->usaha;
    	$du->golongan = $golongan;
    	$du->status = 'belum terverifikasi';

    	$du->save();

    	return redirect()->back()->with('sukses','berhasil mengajukan usaha');
    }
    public function usahaSaya()
    {
        $userID = Auth()->user()->id;
        $data = \App\DataUsaha::where('wirausaha_id','=',$userID)->where('status','=','terverifikasi')->get();

        return view('usaha.usahaSaya',['data' => $data]);
    }
    public function cektakPDF($id)
    {
        $userID = Auth()->user()->id;
        $perusahaanID = \App\DataUsaha::select('id')->where('id','=',$id)->first();
        
        $data = \App\DataUsaha::where('id','=',$id)->get();
 
        $pdf = PDF::loadview('export-pdf',compact('data'));
        return $pdf->download('laporan-pegawai.pdf');
    }
    public function list()
    {
    	$pemohon = \App\DataUsaha::where('status','=','belum terverifikasi')->get();
    	return view('usaha.list',['pemohon' => $pemohon]);
    }
    public function accPemohon(Request $request)
    {
    	foreach ($request->pemohon as $p) {
    		
    		$pemohonUsaha = \App\DataUsaha::where('id','=',$p)->first();
            $wktSkrg = date('Y-m-d.H:i:s');
            // $namaFile = "Bukti_Verifikasi_".$pemohonUsaha->id.$wktSkrg.".doc";
    		\App\DataUsaha::where('id','=',$p)
    			->update([
    				'status' => 'terverifikasi',
                    // 'bukti_verifikasi' => $namaFile,
    			]);	
			
        //     $phpWord = new \PhpOffice\PhpWord\PhpWord();
        // $section = $phpWord->addSection();
        // $text = $section->addText('SURAT BUKTI TERVERIFIKASI');
        // $text = $section->addText('ID perusahaan : '.$pemohonUsaha->id.'.');
        // $text = $section->addText('hai2');
        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // $objWriter->save($namaFile);


			return redirect()->back();
        }
    }
    public function terverifikasi()
    {
    	$terverifikasi = \App\DataUsaha::where('status','=','terverifikasi')->get();
    	return view('usaha.terverifikasi',['terverifikasi' => $terverifikasi]);
    }
   
}
