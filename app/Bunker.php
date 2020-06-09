<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bunker extends Model
{
    protected $fillable = ['name'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
