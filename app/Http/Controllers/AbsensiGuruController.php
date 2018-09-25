<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensi_guru;
use App\guru;
use App\petugas_piket;
use App\User;
use Auth;

class AbsensiGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filterA= gallery::where('id_cabangolahraga');
        $absensi_guru = absensi_guru::all();
        $guru = guru::all();
        $petugas_piket = petugas_piket::all();
        $user = User::all();
            $jumlahIzin= absensi_guru::where('keterangan','Izin')->count();
            $jumlahSakit= absensi_guru::where('keterangan','Sakit')->count();
            $jumlahAlfa= absensi_guru::where('keterangan','Alfa')->count();
           return view('absensi_guru.index',compact('absensi_guru', 'guru','petugas_piket','user','jumlahIzin','jumlahSakit','jumlahAlfa'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function absen()
    {
            $absensi_guru = Auth::user()->absensi_guru()->paginate(10);
            $jumlahIzin= Auth::user()->absensi_guru()->where('keterangan','Izin')->count();
            $jumlahSakit= Auth::user()->absensi_guru()->where('keterangan','Sakit')->count();
            $jumlahAlfa= Auth::user()->absensi_guru()->where('keterangan','Alfa')->count();
            $jumlah_data = count($absensi_guru['absensi_guru']);
          return view('guru.absen',compact('absensi_guru','jumlah_data','jumlahAlfa','jumlahSakit','jumlahIzin'));
     
    }


    public function create()
    {
        $absensi_guru = absensi_guru::all();
        $guru = guru::all();
        $petugas_piket = petugas_piket::all();
        $user = User::all();
       
        return view('absensi_guru.create',compact('absensi_guru', 'guru','petugas_piket','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absensi_guru = absensi_guru::findOrFail($id);
            return view('absensi_guru.show', compact('absensi_guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(absensi_guru $absensi_guru)
    {
        $absensi_guru = absensi_guru::findOrFail($absensi_guru->id);
        $petugas_piket = petugas_piket::all();
        $selectpetugaspiket = absensi_guru::findOrFail($absensi_guru->id)->id_PetugasPiket;
        $guru = guru::all();
        $selectguru = absensi_guru::findOrFail($absensi_guru->id)->id_guru;
        $user = user::all();
       $selectuser = absensi_guru::findOrFail($absensi_guru->id)->id_user;
       
        return view('absensi_guru.edit',compact('guru','absensi_guru','selectguru','petugas_piket','selectpetugaspiket','user','selectuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
        
            'id_guru'=>'required|max:255',
            'tanggal'=>'required|min:1',
            'keterangan'=>'required',
            'id_PetugasPiket'=>'required|max:255',
                 'id_user'=>'required|max:255',
       
        ]);

        $absensi_guru = absensi_guru::findOrFail($id);
        $absensi_guru->id_guru = $request->id_guru;
        $absensi_guru->tanggal = $request->tanggal;
        $absensi_guru->keterangan = $request->keterangan;
        $absensi_guru->id_PetugasPiket = $request->id_PetugasPiket;
         $absensi_guru->id_user = $request->id_user;
      
        
        $absensi_guru->save();
        return redirect()->route('absensi_guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absensi_guru = absensi_guru::findOrFail($id);
        $absensi_guru->delete();
        return redirect()->route('absensi_guru.index');
    }

  public function filterUser($id)
    {
        $user = guru::where('id', $id)->get();
        if($user->count() > 0){
            foreach ($user as $data) {
              

                echo '<option class="form-control" value="'.$data->id_user.'" >'.$data->user->name.'</option>';
            }
        }else{
            echo '<option class="form-control" >Belum Punya Akun</option>';
        }
    }
    }

