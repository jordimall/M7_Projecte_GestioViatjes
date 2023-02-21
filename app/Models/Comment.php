<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Camps que es permet passar al mètode create (funció store de la api CommentController) 
    // o update en format array
    protected $fillable = ['description', 'user_id', 'publication_id'];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
