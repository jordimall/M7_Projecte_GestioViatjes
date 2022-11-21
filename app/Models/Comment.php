<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function publication()
    {
        return $this->belongsTo(Publication::class);
=======
    protected $fillable = ['description', 'like', 'user_id', 'publication_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
>>>>>>> 453635e7c0497fe29c5bfb558000a5aa1124514f
    }
}
