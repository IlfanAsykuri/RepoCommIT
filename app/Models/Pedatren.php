<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedatren extends Model
{
    protected $table = 'pedatrens';
    protected $fillable = ['id_biodata', 'anak_keberapa' , 'berapa_bersaudara'];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'id_biodata'); // 'id_biodata' adalah foreign key
    }
}
    
    
