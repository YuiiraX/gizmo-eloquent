<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\TaskJunction
 *
 * @property int                             $TaskId
 * @property string                          $SourceDirectory
 * @property string                          $DestinationDirectory
 * @property int                             $Options
 * @property-read \Yuiirax\Gizmo\Eloquent\TaskBase $taskBase
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskJunction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskJunction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskJunction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskJunction whereDestinationDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskJunction whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskJunction whereSourceDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskJunction whereTaskId($value)
 * @mixin \Eloquent
 */
class TaskJunction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TaskJunction';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'TaskId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['SourceDirectory',
                           'DestinationDirectory',
                           'Options'];

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
    public function taskBase()
    {
        return $this->belongsTo(TaskBase::class, 'TaskId', 'TaskId');
    }
}
