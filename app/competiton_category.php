<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class competiton_category extends Model
{
    protected $fillable=[
        'category_fa','category_fa','category_en','status','child','festival_id'
    ];

    public function competitions()
    {
        $this->hasMany('App\competiton_category','competiton_category_id','id');
    }

    public function festival()
    {
        return $this->belongsTo('App\festival');
    }

    public function childs()
    {
        return $this->hasMany('App\competiton_category','child','id');
    }

}
