<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [
        'name','brand','serial_number','qty','permit_id'
    ];

    public function permits()
    {
        return $this->belongsTo(Permit::class);
    }
}
