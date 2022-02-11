<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_result extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }

    public function soal_tryouts()
    {
        return $this->hasMany(soal_tryout::class,'soal_tryout_id', 'id');
    }
}
