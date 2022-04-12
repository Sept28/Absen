<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected   $fillable = [
        'name', 'address', 'village', 'district', 'city', 'province'
    ];

    public function indoCity(){
        return $this->belongsTo(IndonesiaCity::class,'city','id');
    }

    public function provincy(){
        return $this->belongsTo(IndonesiaProvince::class,'province','code');
    }

    public function staffs(){
        return $this->hasMany(Staff::class, 'id');
    }
}
