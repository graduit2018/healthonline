<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Message extends Model
{
    protected $fillable = ['message'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
