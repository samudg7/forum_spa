<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $fillable=['title', 'slug', 'body', 'category_id', 'user_id'];
    //per una questione di restrizioni su store QuestionController
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
