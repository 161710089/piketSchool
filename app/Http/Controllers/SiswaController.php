<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\kelas;
use App\user;
use App\absensi_siswa;
use App\Role;
use Auth;
class SiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

     public function index()
    {
        $siswa =  siswa::all();
        $kelas =  kelas::all();
        $user =  user::all();
        
        return view('siswa.index',compact('kelas','siswa','user'));
      
    }

public function absen(absensi_siswa $absensi_siswa)
    {
         $absensi_siswa = Auth::siswa()->absensi_siswa()->paginate(10);
            $jumlahIzin::where('keterangan','Izin')->count();
            $jumlahSakit::where('keterangan','Sakit')->count();
            $jumlahAlfa::where('keterangan','Alfa')->count();
            $jumlah_data = count($absensi_siswa['absensi_siswa']);
          return view('siswa.absen',compact('absensi_siswa','jumlah_data','jumlahAlfa','jumlahSakit','jumlahIzin'));
     
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        $siswa =  siswa::all();
        $kelas =  kelas::all();
        $user =  user::all();
        
        return view('siswa.create',compact('kelas','siswa','user'));
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
         $this->validate($request,[
            'Nis' => 'required|max:255|unique:siswas',
            'Nama' => 'required|min:3|max:255',
            'id_kelas' => 'required|max:255',
            'jk' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            'id_user' => 'required|max:255',
            
                        ]);

        $siswa = new siswa;
        $siswa->Nis = $request->Nis;
        $siswa->Nama = $request->Nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->jk    = $request->jk   ; 
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat    = $request->alamat   ;            
        $siswa->id_user    = $request->id_user   ;            
       
         // dd($siswa);
        $siswa->save();
        
       
           return redirect()->route('siswa.index');    }
    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    
 // protected function Creat(array $data)
 //    {   
 //        $siswa = siswa::create([
 //            'Nis' => $data['Nis'],
 //            'Nama' => $data['Nama'],
 //            'id_kelas' => $data['id_kelas'],
 //            'jk' => $data['jk'],
 //            'tempat_lahir' => $data['tempat_lahir'],
 //            'tanggal_lahir' => $data['Nis'],
 //            'alamat' => $data['alamat'],
       
 //        ]);
 //        return $siswa;
      
 //        $user = User::create([
 //            'name' => $data['name'],
 //            'email' => $data['email'],
 //            'password' => bcrypt($data['password']),
 //        ]);
 //        $memberRole = Role::Where('name' ,'member')->first();
 //        $user->attachRole($memberRole);
 //        return $user;
 //    }


   public function show($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        // memanggil data siswa berdasrkan id di halaman siswa edit
          $siswa = siswa::findOrFail($id);
          $kelas = kelas::all();
          $selectkelas = siswa::findOrFail($siswa->id)->id_kelas;
        
        return view('siswa.edit',compact('kelas','siswa','selectkelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $this->validate($request,[
            'Nis' => 'required|max:255',
            'Nama' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'jk' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            ]);

        $siswa =siswa::findOrFail($id);
        $siswa->Nis = $request->Nis;
        $siswa->Nama = $request->Nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->jk    = $request->jk   ; 
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat    = $request->alamat   ; 
        // dd($siswa);
        $siswa->save();
        return redirect()->route('siswa.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // delete data beradasarkan id
        $siswa = siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');      }

}
