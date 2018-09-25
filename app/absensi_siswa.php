<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class absensi_siswa extends Model
{


    protected $table = 'absensi_siswas';

	use Sortable;

protected $fillable = array('id_siswa','id_kelas', 'tanggal', 'keterangan','nama_petugas','id_user');
protected $sortable = array('id_siswa', 'id_kelas','tanggal','keterangan','nama_petugas','id_user');

public $timestamp = true;


public function siswa() {
	return $this->belongsTo('App\siswa', 'id_siswa');
	}
public function petugas_piket() {
	return $this->belongsTo('App\petugas_piket', 'id_PetugasPiket');
	}
public function kelas() {
	return $this->belongsTo('App\kelas', 'id_kelas');
	}
public function User() {
	return $this->belongsTo('App\User', 'id_user');
	}


}
