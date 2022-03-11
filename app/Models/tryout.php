<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tryout extends Model
{
    use HasFactory;

    protected $table = "tryouts";
    protected $guarded = ['id'];
    protected $fillable = ['nomor_tryout', 'materi_id'];

    public function soal_tryouts()
    {
        return $this->hasMany(soal_tryout::class, 'tryout_id','id');
    }

    public function materi()
    {
        return $this->belongsTo(materi::class,'materi_id','id');
    }

    public function penghubung_users_tryouts()
    {
        return $this->belongsToMany(materi::class,'tryouts_id','id');
    }
}
