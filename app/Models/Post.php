<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "category_id",
        "color",
        "content",
        "thumbnail",
        "tags",
        "published",
    ];
    protected $casts = [
        "tags" => "array",
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
