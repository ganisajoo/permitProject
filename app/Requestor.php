<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestor extends Model
{
    protected $fillable = [
        'name','nik','email','department','phone','permit_id'
    ];

    public function permits(){
        return $this->belongsTo('App/Permit');
    }
}
