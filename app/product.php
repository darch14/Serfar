<?php

namespace Serfar;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "products";

    protected $fillable = ['reference','name', 'description', 'category','use', 'unit','invima', 'laboratory_id'];

    public function pro_image()
    {
        return $this->hasOne('Serfar\proimage');
    }

    public function laboratory()
    {
        return $this->belongsTo('Serfar\laboratory');
    }
}
