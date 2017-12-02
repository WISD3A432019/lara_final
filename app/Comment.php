<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable=[
        'post_id',
        'content',
        'owner',
        ];
    public function post()
    {
    	return $this ->belongsTo(Post::class);
    }
}
