<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class labimage extends Model
{
    protected $table = "labimages";

    protected $fillable = ['name', 'laboratories_id'];

    public function laboratories()
    {
        return $this->belongsTo('Serfar\laboratory');
    }
}
