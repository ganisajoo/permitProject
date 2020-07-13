<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = [
        'risk','possibility','mitigation','impact','permit_id'
    ];

    public function permits()
    {
        return $this->belongsTo(Permit::class);
    }
}
