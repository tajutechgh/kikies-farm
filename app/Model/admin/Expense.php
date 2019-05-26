<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function scopeSearch($query, $s)
    {
        return $query->where('name', 'like', '%' .$s. '%')
                    ->orWhere('amount', 'like', '%' .$s. '%');
    }
}
