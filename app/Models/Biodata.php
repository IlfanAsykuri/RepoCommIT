<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
     // Tentukan nama tabel secara eksplisit
     protected $table = 'biodata'; // Pastikan ini sesuai dengan nama tabel di database

     protected $fillable = [
         'nama', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir',
         'nik', 'no_kk', 'no_telpon', 'email', 'jenjang_pendidikan_terakhir',
     ];
 
     public function pedatrens()
     {
         return $this->hasOne(Pedatren::class, 'id_biodata');
     }
 }

