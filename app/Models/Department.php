<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'initial',
        'department_name'
    ];

    public function lecturer(){
        return $this->hasMany(Lecturer::class);
    }
}
