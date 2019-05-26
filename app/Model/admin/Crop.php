<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    public function scopeSearch($query, $s)
    {
        return $query->where('name', 'like', '%' .$s. '%')
                    ->orWhere('cost', 'like', '%' .$s. '%');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\admin\Category','category_id');
    }
}
