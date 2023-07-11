<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','hero_id','date','notes','rating'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function hero()
    {
        return $this->belongsTo(Hero::class,'hero_id');
    }
}
