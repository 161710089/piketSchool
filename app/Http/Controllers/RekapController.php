<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekap;
use App\kelas;
use App\absensi_siswa;
use App\absensi_guru;
use App\User;
use Auth;
class RekapController extends Controller
{
        public function index()
    {
        $kelas = Kelas::all();
        $absensi_siswa = absensi_siswa::all();
        return view('rekap.index', compact('absensi_siswa','kelas'));
    }

    public function index2(Request $request)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $kelas = $request->c;
        $jumlahIzin= absensi_siswa::whereBetween('tanggal', [$a, $b])
        ->where('id_kelas','=',$kelas)->get()->where('keterangan','Izin')->count();
        $jumlahSakit= absensi_siswa::whereBetween('tanggal', [$a, $b])
        ->where('id_kelas','=',$kelas)->get()->where('keterangan','Sakit')->count();
        $jumlahAlfa= absensi_siswa::whereBetween('tanggal', [$a, $b])
        ->where('id_kelas','=',$kelas)->get()->where('keterangan','Alfa')->count();
        $absensi_siswa = absensi_siswa::whereBetween('tanggal', [$a, $b])->where('id_kelas','=',$kelas)->get();
        return view('rekap.index2', compact('absensi_siswa', 'a','b','kelas','jumlahIzin','jumlahAlfa','jumlahSakit'));
    }

public function index3()
    {
		$absensi_guru = absensi_guru::all();
        return view('rekap.index3', compact('absensi_guru'));
        
    }

    public function index4(Request $request)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $absensi_guru = absensi_guru::whereBetween('tanggal', [$a, $b])->get();
        return view('rekap.index4', compact('absensi_guru', 'a','b'));
    }
	
	public function publish($id)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $absensi_guru = absensi_guru::whereBetween('tanggal', [$a, $b])->get();
        return view('rekap.index4', compact('absensi_guru', 'a','b'));
    }

}
