<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vidio_materi extends Model
{
    use HasFactory;

    public function bab_materi()
    {
        return $this->belongsTo(bab_materi::class,'bab_materi_id','id');
    }
}
