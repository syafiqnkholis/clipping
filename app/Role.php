<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','name'
    ];
}
