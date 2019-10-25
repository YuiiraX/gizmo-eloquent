<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\UserSessionChange
 *
 * @property int                                $UserSessionChangeId
 * @property int                                $UserSessionId
 * @property int                                $UserId
 * @property int                                $HostId
 * @property int                                $State
 * @property float                              $Span
 * @property int|null                           $CreatedById
 * @property string                             $CreatedTime
 * @property int                                $Slot
 * @property-read \YuiiraX\Gizmo\Eloquent\User|null   $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember  $customer
 * @property-read \YuiiraX\Gizmo\Eloquent\Host        $host
 * @property-read \YuiiraX\Gizmo\Eloquent\UserSession $userSession
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereSpan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereUserSessionChangeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserSessionChange whereUserSessionId($value)
 * @mixin \Eloquent
 */
class UserSessionChange extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserSessionChange';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UserSessionChangeId';

    /**
     * @var array
     */
    protected $fillable = ['UserSessionId',
                           'UserId',
                           'HostId',
                           'State',
                           'Span',
                           'CreatedById',
                           'CreatedTime',
                           'Slot'];

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
    public function host()
    {
        return $this->belongsTo(Host::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'CreatedById', 'UserId');
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
    public function userSession()
    {
        return $this->belongsTo(UserSession::class, 'UserSessionId', 'UserSessionId');
    }
}
