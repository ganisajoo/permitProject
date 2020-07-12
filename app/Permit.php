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
    return $this->hasMany('App/Requestor');
  }

  public function visitors()
  {
      return $this->hasMany('App/Visitor');
  }

  public function equipments()
  {
      return $this->hasMany('App/Equipment');
  }

  public function operations()
  {
      return $this->hasMany('App/Operation');
  }
}
