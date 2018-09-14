<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class laboratory extends Model
{
    protected $table = "laboratories";

    protected $fillable = ['name', 'web'];

    public function lab_images()
    {
        return $this->hasOne('Serfar\labimage');
    }
}
