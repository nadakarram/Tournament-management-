<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class competition extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $fillable=["competition_name","competition_desc","competition_photo","start_data"];
    protected $table="competitions";
    protected $primarykey="competition_id";
}
