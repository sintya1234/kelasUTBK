<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
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
