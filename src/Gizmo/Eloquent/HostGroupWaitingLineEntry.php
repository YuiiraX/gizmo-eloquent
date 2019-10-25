<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry
 *
 * @property int                                         $Id
 * @property int                                         $HostGroupId
 * @property int                                         $UserId
 * @property int                                         $Position
 * @property bool                                        $IsManualPosition
 * @property float                                       $TimeInLine
 * @property float                                       $ReadyTime
 * @property bool                                        $IsReadyTimedOut
 * @property int                                         $State
 * @property int|null                                    $ModifiedById
 * @property string|null                                 $ModifiedTime
 * @property int|null                                    $CreatedById
 * @property string                                      $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null    $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember           $customer
 * @property-read \Yuiirax\Gizmo\Eloquent\HostGroup            $hostGroup
 * @property-read \Yuiirax\Gizmo\Eloquent\HostGroupWaitingLine $hostGroupWaitingLine
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null            $modifiedBy
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereHostGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereIsManualPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereIsReadyTimedOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereReadyTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereTimeInLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry whereUserId($value)
 * @mixin \Eloquent
 */
class HostGroupWaitingLineEntry extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'HostGroupWaitingLineEntry';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'Id';

    /**
     * @var array
     */
    protected $fillable = ['HostGroupId',
                           'UserId',
                           'Position',
                           'IsManualPosition',
                           'TimeInLine',
                           'ReadyTime',
                           'IsReadyTimedOut',
                           'State',
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
        return $this->belongsTo(HostGroup::class, 'HostGroupId', 'HostGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hostGroupWaitingLine()
    {
        return $this->belongsTo(HostGroupWaitingLine::class, 'HostGroupId', 'HosGroupId');
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
    public function customer()
    {
        return $this->belongsTo(UserMember::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy()
    {
        return $this->belongsTo(User::class, 'ModifiedById', 'UserId');
    }
}
