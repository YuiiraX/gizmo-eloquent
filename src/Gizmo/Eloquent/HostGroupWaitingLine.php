<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine
 *
 * @property int                                                                          $HosGroupId
 * @property int                                                                          $TimeOutOptions
 * @property bool                                                                         $EnablePriorities
 * @property int|null                                                                     $ModifiedById
 * @property string|null                                                                  $ModifiedTime
 * @property int|null                                                                     $CreatedById
 * @property string                                                                       $CreatedTime
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                     $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\HostGroup                                             $hostGroup
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                     $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserMember[] $waitingUsers
 * @property-read int|null                                                                $waiting_users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine whereEnablePriorities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine whereHosGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine whereTimeOutOptions($value)
 * @mixin \Eloquent
 */
class HostGroupWaitingLine extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'HostGroupWaitingLine';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HosGroupId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['TimeOutOptions',
                           'EnablePriorities',
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
    public function hostGroup()
    {
        return $this->belongsTo(HostGroup::class, 'HosGroupId', 'HostGroupId');
    }

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
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function waitingUsers()
    {
        return $this->hasManyThrough(UserMember::class,
                                     HostGroupWaitingLineEntry::class,
                                     'HostGroupId',
                                     'UserId',
                                     'HosGroupId',
                                     'UserId');
    }


}
