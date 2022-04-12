<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndonesiaCity extends Model
{
    use HasFactory;

    protected $table = 'indonesia_cities';

    public function offices()
    {
        return $this->hasMany(Office::class, 'id');
    }

    public function biodatas()
    {
        return $this->hasMany(Office::class, 'id');
    }
}
