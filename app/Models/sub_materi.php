<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_materi extends Model
{
    use HasFactory;

    protected $table = "sub_materis";
    protected $guarded = ['id'];
    protected $fillable = ['nama_sub_materi', 'slug', 'materi_id'];

    public function materi()
    {
        return $this->belongsTo(materi::class,'materi_id','id');
    }

    public function bab_materis()
    {
        return $this->hasMany(bab_materi::class,'sub_materi_id','id');
    }

    public function babMateris()
    {
        return $this->hasMany(bab_materi::class,'sub_materi_id','id');
    }
}
