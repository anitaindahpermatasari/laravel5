<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familys extends Model
{
    use HasFactory;
    protected $guarded = ['mane'];

    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }
}
