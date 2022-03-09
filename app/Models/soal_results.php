<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal_results extends Model
{
    use HasFactory;

    public function penghubung_user_tryout()
    {
        return $this->belongsTo(penghubung_user_tryout::class,'pemghubung_user_tryouts_id','id');
    }

    public function soal_tryouts()
    {
        return $this->hasOne(penghubung_user_tryout::class,'soal_tryouts_id','id');
    }

   
}
