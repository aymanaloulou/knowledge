<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['comment',];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articles()
    {
        return $this->belongsTo(Article::class);
    }

}
