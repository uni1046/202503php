<?php

namespace App\Models;

use Database\Factories\MetadataFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property-read \App\Models\Post|null $post
 * @method static \Database\Factories\MetadataFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metadata newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metadata newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metadata query()
 * @mixin \Eloquent
 */
class Metadata extends Model
{
    /** @use HasFactory<MetadataFactory> */
    use HasFactory;

    protected $fillable = [
        'like_count',
        'view_count',
        'comment_count',
        'share_count',
        'favorite_count',
        'post_id',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
