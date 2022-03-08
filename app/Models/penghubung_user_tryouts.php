<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghubung_user_tryouts extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(user::class,'tryouts_id','id');
    }

    public function soal_results()
    {
        return $this->hasMany(soal_results::class,'penghubung_soal_tryouts_id','id');
    }

    public function tryout()
    {
        return $this->hasOne(tryout::class,'tryouts_id','id');
    }
}
