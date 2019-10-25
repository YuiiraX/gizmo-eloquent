<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\TaskNotification
 *
 * @property int                             $TaskId
 * @property string                          $Title
 * @property string                          $Message
 * @property int                             $NotificationOptions
 * @property-read \Yuiirax\Gizmo\Eloquent\TaskBase $taskBase
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskNotification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskNotification whereNotificationOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskNotification whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\TaskNotification whereTitle($value)
 * @mixin \Eloquent
 */
class TaskNotification extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TaskNotification';

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
    protected $fillable = ['Title',
                           'Message',
                           'NotificationOptions'];

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
