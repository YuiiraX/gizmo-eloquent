<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\UserSession
 *
 * @property int                                                                                 $UserSessionId
 * @property int                                                                                 $UserId
 * @property int                                                                                 $HostId
 * @property int                                                                                 $State
 * @property float                                                                               $Span
 * @property float                                                                               $BilledSpan
 * @property string|null                                                                         $PendTime
 * @property float                                                                               $PendSpan
 * @property string|null                                                                         $EndTime
 * @property int|null                                                                            $CreatedById
 * @property string                                                                              $CreatedTime
 * @property int                                                                                 $Slot
 * @property float                                                                               $PendSpanTotal
 * @property float                                                                               $PauseSpan
 * @property float                                                                               $PauseSpanTotal
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null                                                    $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember                                                   $customer
 * @property-read \Yuiirax\Gizmo\Eloquent\Host                                                         $host
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Usage[]             $usages
 * @property-read int|null                                                                       $usages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserSessionChange[] $userSessionChanges
 * @property-read int|null                                                                       $user_session_changes_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereBilledSpan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession wherePauseSpan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession wherePauseSpanTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession wherePendSpan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession wherePendSpanTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession wherePendTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereSpan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserSession whereUserSessionId($value)
 * @mixin \Eloquent
 */
class UserSession extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserSession';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UserSessionId';

    /**
     * @var array
     */
    protected $fillable = ['UserId',
                           'HostId',
                           'State',
                           'Span',
                           'BilledSpan',
                           'PendTime',
                           'PendSpan',
                           'EndTime',
                           'CreatedById',
                           'CreatedTime',
                           'Slot',
                           'PendSpanTotal',
                           'PauseSpan',
                           'PauseSpanTotal'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userSessionChanges()
    {
        return $this->hasMany(UserSessionChange::class, 'UserSessionId', 'UserSessionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function usages()
    {
        return $this->hasManyThrough(Usage::class,
                                     UsageUserSession::class,
                                     'UserSessionId',
                                     'UsageId',
                                     'UserSessionId',
                                     'UsageId');
    }
}
