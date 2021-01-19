<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = "event_id";

    protected $fillable = [
        'event_name',
        'event_date',
        'location',
        'detail',
        'photo',
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_event', 'event_id', 'user_id');
    }

}
