<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nidn',
        'lecturer_name',
        'lecturer_email',
        'description',
        'photo',
        'phone',
        'line_account',
        'jabatan_id',
    ];

    public function department(){
        return $this->belongsTo(department::class, 'department_id', 'id');
    }
}
