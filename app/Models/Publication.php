<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $fillable = ['url', 'description', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
            'categories_publications'
        );
    }

    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('created_at');
    }


}
