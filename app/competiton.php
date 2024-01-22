<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class competiton extends Model
{

    protected $fillable=[
        'user_id','image','competiton_category_id','description','image2','image3','date_fa','time_fa','status','festival_id','image4','image5','image6','title','material_id','competiton_category_child'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function competition_category()
    {
        return $this->belongsTo('App\competiton_category','competiton_category_id','id');
    }

    public function material()
    {
        return $this->belongsTo('App\material');
    }


}
