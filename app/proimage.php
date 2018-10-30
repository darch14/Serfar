<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class proimage extends Model
{
    protected $table = "proimages";

    protected $fillable = ['name', 'product_id'];

    public function product()
    {
        return $this->belongsTo('Serfar\product');
    }
}
