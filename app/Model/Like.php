<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Like extends Model
{
    protected $guarded = [];

    public function reply() {
        return $this->belongsTo(Reply::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
