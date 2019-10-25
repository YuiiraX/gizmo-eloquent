<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\Usage
 *
 * @property int                                                                            $UsageId
 * @property int                                                                            $UsageSessionId
 * @property int                                                                            $UserId
 * @property float                                                                          $Seconds
 * @property string|null                                                                    $ModifiedTime
 * @property string                                                                         $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UsageSession[] $currentUseBy
 * @property-read int|null                                                                  $current_use_by_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember                                              $customer
 * @property-read \YuiiraX\Gizmo\Eloquent\UsageRate                                               $usageRate
 * @property-read \YuiiraX\Gizmo\Eloquent\UsageSession                                            $usageSession
 * @property-read \YuiiraX\Gizmo\Eloquent\UsageTime                                               $usageTime
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage ofPeriod($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage whereSeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage whereUsageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage whereUsageSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Usage whereUserId($value)
 * @mixin \Eloquent
 */
class Usage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Usage';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UsageId';

    /**
     * @var array
     */
    protected $fillable = ['UsageSessionId',
                           'UserId',
                           'Seconds',
                           'ModifiedTime',
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
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param                                       $start
     * @param                                       $end
     *
     * @return \Illuminate\Database\Eloquent\Builder mixed
     */
    public function scopeOfPeriod($query, $start, $end)
    {
        return $query->whereBetween('CreatedTime', [$start,
                                                    $end]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usageSession()
    {
        return $this->belongsTo(UsageSession::class, 'UsageSessionId', 'UsageSessionId');
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
    public function currentUseBy()
    {
        return $this->hasMany(UsageSession::class, 'CurrentUsageId', 'UsageId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usageTime()
    {
        return $this->hasOne(UsageTime::class, 'UsageId', 'UsageId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usageRate()
    {
        return $this->hasOne(UsageRate::class, 'UsageId', 'UsageId');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function userSession()
    {
        return $this->hasOneThrough(UserSession::class,
                                    UsageUserSession::class,
                                    'UsageId',
                                    'UserSessionId',
                                    'UsageId',
                                    'UserSessionId');
    }
}
