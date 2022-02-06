<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tryout extends Model
{
    use HasFactory;

    public function soal_tryouts()
    {
        return $this->hasMany(soal_tryout::class, 'tryout_id','id');
    }

    public function materi()
    {
        return $this->belongsTo(materi::class,'materi_id','id');
    }
}
