<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal_tryout extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user_result()
    {
        return $this->belongsTo(user_result::class, 'soal_tryout_id', 'id');
    }

    public function tryout()
    {
        return $this->belongsTo(tryout::class, 'tryout_id','id');
    }
    public function pilgan_tryouts()
    {
        return $this->hasMany(pilgan_tryout::class, 'soal_tryout_id','id');
    }
}
