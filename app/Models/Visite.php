<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class Visite extends Model
{
    use HasFactory;

    protected $fillable = ['video_id'];

    public function video(){
        return $this->belongsTo(Video::class);
    }
}
