<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;

    protected $table = "materis";
    protected $guarded = ['id'];
    protected $fillable = ['nama_materi', 'slug'];
    
    public function bankSoals()
    {
        return $this->hasMany(bank_soal::class,'materi_id','id');
    }

    public function sub_materis()
    {
        return $this->hasMany(sub_materi::class, 'materi_id','id');
    }

    public function subMateris()
    {
        return $this->hasMany(sub_materi::class, 'materi_id','id');
    }

    public function tryouts()
    {
        return $this->hasMany(tryout::class, 'materi_id','id');
    }
}
