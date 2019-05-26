<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Pesticide extends Model
{
    public function scopeSearch($query, $s)
    {
        return $query->where('name', 'like', '%' .$s. '%')
                    ->orWhere('cost', 'like', '%' .$s. '%');
    }
}
