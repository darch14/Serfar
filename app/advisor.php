<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class advisor extends Model
{
    protected $table = "advisors";

    protected $fillable = ['name', 'lastname1', 'lastname2', 'email', 'telefono'];

    public function images()
    {
        return $this->hasOne('Serfar\image');
    }
}
