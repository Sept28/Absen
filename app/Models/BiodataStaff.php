<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataStaff extends Model
{
    use HasFactory;
    protected $table = 'biodata_staffs';
    protected $fillable = [
        'name',
        'full_name',
        'nik',
        'birth_date',
        'education',
        'major',
        'institute_name',
        'gender',
        'address',
        'village',
        'district',
        'city',
        'province',
        'phone_number',
        'photo'
    ];

    public function indoCity(){
        return $this->belongsTo(IndonesiaCity::class, 'city', 'id');
    }

    public function provincy(){
        return $this->belongsTo(IndonesiaProvince::class, 'province', 'code');
    }

    public function users(){
        return $this->hasMany(User::class, 'id');
    }
}
