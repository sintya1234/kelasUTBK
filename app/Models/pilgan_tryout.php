<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pilgan_tryout extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function soal_tryout()
    {
        return $this->belongsTo(soal_tryout::class,'soal_tryout_id','id');
    }
}
