<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\TaskProcess
 *
 * @property int                             $TaskId
 * @property string                          $FileName
 * @property string|null                     $Arguments
 * @property string|null                     $WorkingDirectory
 * @property string|null                     $Username
 * @property string|null                     $Password
 * @property int                             $ProcessOptions
 * @property-read \YuiiraX\Gizmo\Eloquent\TaskBase $taskBase
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess whereArguments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess whereProcessOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskProcess whereWorkingDirectory($value)
 * @mixin \Eloquent
 */
class TaskProcess extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TaskProcess';

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
    protected $fillable = ['FileName',
                           'Arguments',
                           'WorkingDirectory',
                           'Username',
                           'Password',
                           'ProcessOptions'];

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
