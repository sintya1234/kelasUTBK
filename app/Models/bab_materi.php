<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab_materi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sub_materi()
    {
        return $this->belongsTo(sub_materi::class,'sub_materi_id','id');
    }

    public function vidio_materis()
    {
        return $this->hasMany(vidio_materi::class,'bab_materi_id','id');
    }
}
