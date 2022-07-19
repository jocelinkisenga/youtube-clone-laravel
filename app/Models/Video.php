<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Visite;
use App\Models\Comment;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'description', 'video'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function visites(){
        return $this->hasMany(Visite::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
