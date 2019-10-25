<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\UsageSession
 *
 * @property int                                                                     $UsageSessionId
 * @property int                                                                     $UserId
 * @property int|null                                                                $CurrentUsageId
 * @property float                                                                   $CurrentSecond
 * @property bool                                                                    $IsActive
 * @property float                                                                   $NegativeSeconds
 * @property float                                                                   $StartFee
 * @property float                                                                   $MinimumFee
 * @property float                                                                   $RatesTotal
 * @property string|null                                                             $ModifiedTime
 * @property string                                                                  $CreatedTime
 * @property-read \YuiiraX\Gizmo\Eloquent\Usage|null                                       $currentUsage
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember                                       $customer
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineSession                               $invoiceLineSession
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLSession                                 $productOLSessions
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Usage[] $usages
 * @property-read int|null                                                           $usages_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession ofPeriod($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereCurrentSecond($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereCurrentUsageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereMinimumFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereNegativeSeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereRatesTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereStartFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereUsageSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageSession whereUserId($value)
 * @mixin \Eloquent
 */
class UsageSession extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UsageSession';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UsageSessionId';

    /**
     * @var array
     */
    protected $fillable = ['UserId',
                           'CurrentUsageId',
                           'CurrentSecond',
                           'IsActive',
                           'NegativeSeconds',
                           'StartFee',
                           'MinimumFee',
                           'RatesTotal',
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
    public function currentUsage()
    {
        return $this->belongsTo(Usage::class, 'CurrentUsageId', 'UsageId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(UserMember::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoiceLineSession()
    {
        return $this->hasOne(InvoiceLineSession::class, 'UsageSessionId', 'UsageSessionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productOLSessions()
    {
        return $this->hasOne(ProductOLSession::class, 'UsageSessionId', 'UsageSessionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usages()
    {
        return $this->hasMany(Usage::class, 'UsageSessionId', 'UsageSessionId');
    }
}
