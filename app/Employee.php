<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'role', 'email', 'phone', 'admission',
    ];
}
