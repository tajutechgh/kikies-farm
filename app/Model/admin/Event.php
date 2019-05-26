<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function scopeSearch($query, $s)
    {
        return $query->where('name', 'like', '%' .$s. '%')
                    ->orWhere('start_date', 'like', '%' .$s. '%');
    }
}
