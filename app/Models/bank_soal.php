<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank_soal extends Model
{
    use HasFactory;

    protected $table = "bank_soals";
    protected $guarded = ['id'];
    protected $fillable = ['judul_bank_soal', 'slug', 'file_bank_soal', 'materi_id'];

    public function materi()
    {
        return $this->belongsTo(materi::class,'materi_id','id');
    }
}
