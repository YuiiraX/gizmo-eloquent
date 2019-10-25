<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\TaskBase
 *
 * @property int                                                                          $TaskId
 * @property string                                                                       $Name
 * @property string                                                                       $Guid
 * @property int|null                                                                     $ModifiedById
 * @property string|null                                                                  $ModifiedTime
 * @property int|null                                                                     $CreatedById
 * @property string                                                                       $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppExeTask[] $_exes
 * @property-read int|null                                                                $_exes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ClientTask[] $clientTasks
 * @property-read int|null                                                                $client_tasks_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                     $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppExe[]     $exes
 * @property-read int|null                                                                $exes_count
 * @property-read \YuiiraX\Gizmo\Eloquent\TaskJunction                                          $junction
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                     $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\TaskNotification                                      $notification
 * @property-read \YuiiraX\Gizmo\Eloquent\TaskProcess                                           $process
 * @property-read \YuiiraX\Gizmo\Eloquent\TaskScript                                            $script
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\TaskBase whereTaskId($value)
 * @mixin \Eloquent
 */
class TaskBase extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TaskBase';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'TaskId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'Guid',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime'];

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
    public function createdBy()
    {
        return $this->belongsTo(UserOperator::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy()
    {
        return $this->belongsTo(UserOperator::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function junction()
    {
        return $this->hasOne(TaskJunction::class, 'TaskId', 'TaskId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function notification()
    {
        return $this->hasOne(TaskNotification::class, 'TaskId', 'TaskId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function process()
    {
        return $this->hasOne(TaskProcess::class, 'TaskId', 'TaskId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function script()
    {
        return $this->hasOne(TaskScript::class, 'TaskId', 'TaskId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientTasks()
    {
        return $this->hasMany(ClientTask::class, 'TaskBaseId', 'TaskId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function exes()
    {
        return $this->belongsToMany(AppExe::class,
                                    'AppExeTask',
                                    'TaskBaseId',
                                    'AppExeId')
                    ->as('options')
                    ->using(AppExeTask::class)
                    ->withPivot(['Activation',
                                 'UseOrder',
                                 'IsEnabled',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _exes()
    {
        return $this->hasMany(AppExeTask::class, 'TaskBaseId', 'TaskId');
    }
}
