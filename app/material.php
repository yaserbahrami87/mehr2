<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    protected $fillable=[
        'material','status',
    ];

    public function status()
    {
        switch ($this->status)
        {
            case 1:return "فعال";
                    break;
            case 0:return "غیرفعال";
                    break;
            default:return "خطا";
        }
    }

    public function competitions()
    {
        return $this->hasMany('App\competiton');
    }
}
