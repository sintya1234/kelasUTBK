<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank_soal extends Model
{
    use HasFactory;

    public function materi()
    {
        return $this->belongsTo(materi::class,'materi_id','id');
    }
}
