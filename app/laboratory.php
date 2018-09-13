<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class laboratory extends Model
{
    protected $table = "laboratories";

    protected $fillable = ['name', 'web'];

    public function labimages()
    {
        return $this->hasOne('Serfar\labimage');
    }
}
