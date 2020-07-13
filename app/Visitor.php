<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'name','nik','department','phone','permit_id'
    ];

    public function permits(){
        return $this->belongsTo(Visitor::class);
    }
}


