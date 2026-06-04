<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

//    protected $table = 'posts';
//    protected $primaryKey = 'id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    public $timestamps = false;
//    const string CREATED_AT = 'created_date';
//    const string UPDATED_AT = 'updated_date';

    protected $fillable = ['title','slug', 'content'];
//    protected $guarded = [];


    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
