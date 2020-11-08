<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'cnpj', 'address',
    ];

    /**
     * Get the employees on the Company.
     */
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
