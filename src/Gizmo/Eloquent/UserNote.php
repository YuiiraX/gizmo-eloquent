<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Yuiirax\Gizmo\Eloquent\UserNote
 *
 * @property int                               $NoteId
 * @property int                               $UserId
 * @property int                               $UserNoteOptions
 * @property-read \Yuiirax\Gizmo\Eloquent\Note       $note
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember $owner
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserNote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserNote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserNote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserNote whereNoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserNote whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserNote whereUserNoteOptions($value)
 * @mixin \Eloquent
 */
class UserNote extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserNote';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'NoteId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['UserId',
                           'UserNoteOptions'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d\TH:i:s';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'gizmos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function note()
    {
        return $this->belongsTo(Note::class, 'NoteId', 'NoteId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(UserMember::class, 'UserId', 'UserId');
    }
}
