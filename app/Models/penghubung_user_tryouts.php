<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghubung_user_tryouts extends Model
{
    use HasFactory;

    protected $table = "penghubung_users_tryouts";
    protected $guarded = ['id'];
    protected $fillable = ['users_id', 'tryouts_id', 'status_pengerjaan', 'nilai'];

    public function user()
    {
        return $this->hasOne(user::class,'tryouts_id','id');
    }

    public function soal_results()
    {
        return $this->hasMany(soal_results::class,'penghubung_soal_tryouts_id','id');
    }

    public function tryout()
    {
        return $this->hasOne(tryout::class,'tryouts_id','id');
    }
}
