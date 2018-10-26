<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table = "brands";

    protected $fillable = ['name', 'laboratory_id'];

    public function laboratory()
    {
        return $this->belongsTo('Serfar\laboratory');
    }
}
