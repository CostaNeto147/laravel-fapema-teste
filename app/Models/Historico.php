<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class historico extends Model
{
    protected $fillable=
    [
        'type ','amount ','total_before','total_after','date'
    ];

}
