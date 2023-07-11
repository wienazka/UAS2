<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = ['name','poster', 'weapon', 'role_id','special_id','difficult_id','description'];

    public function role()
    {
        return $this->belongsTo(Role::class,'role_id');
    }

    public function special()
    {
        return $this->belongsTo(Special::class,'special_id');
    }

    public function difficult()
    {
        return $this->belongsTo(Difficult::class,'difficult_id');
    }
}
