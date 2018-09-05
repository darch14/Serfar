<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
  protected $table = "images";

  protected $fillable = ['name', 'advisor_id'];

  public function advisors()
  {
    return $this->belongsTo('Serfar\advisor');
  }
}
