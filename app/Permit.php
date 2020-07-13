<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
  protected $fillable = [
    'name','purpose','time_range','akses','akses_type','area','prosedure','testing',
    'rollback','id_requestor','id_visitor','id_equipment','id_operation'
  ];

  public function requestors()
  {
    return $this->hasMany(Requestor::class);
  }

  public function visitors()
  {
      return $this->hasMany(Visitor::class);
  }

  public function equipments()
  {
      return $this->hasMany(Equipment::class);
  }

  public function operations()
  {
      return $this->hasMany(Operation::class);
  }
}
