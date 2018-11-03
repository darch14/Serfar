<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "products";

    protected $fillable = ['name', 'description', 'category', 'unit', 'brand_id'];

    public function pro_image()
    {
        return $this->hasOne('Serfar\proimage');
    }

    public function brand()
    {
        return $this->belongsTo('Serfar\brand');
    }
}
