<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable=["event_name","event_photo","event_desc","event_time","state","competition_id","eventfeild_id"];
    use HasFactory;
}
