<?php

namespace App\Models;

use App\Models\companie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class employee extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function companie(){
        return $this->belongsTo(companie::class,'Company','id');
    }
}
