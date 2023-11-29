<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Publication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    /**
     * Append users Ids that likes the publication.
     */
    public static function appendUsersLike($publications)
    {
        foreach ($publications as $i => $publication) {
            $usersLikeObj = [];
            $likes = DB::table('publication_likes')
                ->select('user_id')
                ->where('publication_id', $publication->id)
                ->get()
                ->toArray();

            $usersLikeObj = array_merge($usersLikeObj, $likes);

            $usersLike = array_map(function($item) {
                return $item->user_id;
            }, $usersLikeObj);

            $publications[$i]->usersLike = $usersLike;
        }

        return $publications;
    }

    /**
     * Get the user that owns the publication.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the replies for the publication.
     */
    public function replies(): HasMany
    {
        $replies = $this->hasMany(Reply::class);
        $replies->getQuery()->join('users', 'replies.user_id', '=', 'users.id');

        return $replies;
    }
}
