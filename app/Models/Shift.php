<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    protected $fillable = [
        'shift_name', 'time_in', 'time_out', 'late'
    ];

    public function staffs(){
        return $this->hasMany(Staff::class, 'id');
    }
}
