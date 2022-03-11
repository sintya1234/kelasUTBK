<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pilgan_tryout extends Model
{
    use HasFactory;

    protected $table = "pilgan_tryouts";
    protected $guarded = ['id'];
    protected $fillable = ['pilihan_ganda', 'status_benar', 'soal_tryout_id'];

    public function soal_tryout()
    {
        return $this->belongsTo(soal_tryout::class,'soal_tryout_id','id');
    }
}
