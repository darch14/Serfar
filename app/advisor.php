<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class advisor extends Model
{
    protected $table = "advisors";

    protected $fillable = ['name', 'lastname1', 'lastname2', 'position', 'email', 'number'];

    public function images()
    {
        return $this->hasOne('Serfar\image');
    }
}
