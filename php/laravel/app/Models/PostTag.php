<?php

namespace App\Models;

use Database\Factories\PostTagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Database\Factories\PostTagFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PostTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PostTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PostTag query()
 * @mixin \Eloquent
 */
class PostTag extends Model
{
    /** @use HasFactory<PostTagFactory> */
    use HasFactory;
}
