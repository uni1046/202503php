<?php

namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 *
 *
 * @property-read \App\Models\Author|null $author
 * @method static \Database\Factories\PostFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post query()
 * @mixin \Eloquent
 */
class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'slug',
        'status',
    ];

    public function author(): BelongsTo
    {
        // $post->author; // 这样就能拿到文章 ID 为 1 的作者的对象(作者的所有信息)
        // $post->author->name; // 这样就能拿到文章 ID 为 1 的作者的名字
        return $this->belongsTo(Author::class);
    }

    public function metadata(): HasOne
    {
        return $this->hasOne(Metadata::class);
    }

    /**
     * A post belongs to many tags.
     *
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id')->withTimestamps();

    }
}

