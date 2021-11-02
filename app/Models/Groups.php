<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
    protected $guarded = ['mane'];

    public function friends()
    {
        return $this->hasMany('App\Models\Friends');
    }

    public function familys()
    {
        return $this->hasMany('App\Models\Familys');
    }
}
