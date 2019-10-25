<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductTime
 *
 * @property int                                                                                         $ProductId
 * @property int                                                                                         $Minutes
 * @property int|null                                                                                    $WeekDayMaxMinutes
 * @property int|null                                                                                    $WeekEndMaxMinutes
 * @property int|null                                                                                    $AppGroupId
 * @property int                                                                                         $ExpiresAfter
 * @property int                                                                                         $ExpirationOptions
 * @property int                                                                                         $ExpireFromOptions
 * @property int                                                                                         $UsageOptions
 * @property int                                                                                         $UseOrder
 * @property int                                                                                         $ExpireAfterType
 * @property int                                                                                         $ExpireAtDayTimeMinute
 * @property-read \YuiiraX\Gizmo\Eloquent\AppGroup|null                                                        $appGroup
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostGroup[]                 $disallowedHostGroups
 * @property-read int|null                                                                               $disallowed_host_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoiceLineTime[]           $invoiceLineTimes
 * @property-read int|null                                                                               $invoice_line_times_count
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBase                                                          $productBase
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductOLTime[]             $productOLTimes
 * @property-read int|null                                                                               $product_o_l_times_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductTimeHostDisallowed[] $productTimeHostDisalloweds
 * @property-read int|null                                                                               $product_time_host_disalloweds_count
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductTimePeriod                                                    $productTimePeriod
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereAppGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereExpirationOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereExpireAfterType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereExpireAtDayTimeMinute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereExpireFromOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereExpiresAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereUsageOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereUseOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereWeekDayMaxMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTime whereWeekEndMaxMinutes($value)
 * @mixin \Eloquent
 */
class ProductTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductTime';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Minutes',
                           'WeekDayMaxMinutes',
                           'WeekEndMaxMinutes',
                           'AppGroupId',
                           'ExpiresAfter',
                           'ExpirationOptions',
                           'ExpireFromOptions',
                           'UsageOptions',
                           'UseOrder',
                           'ExpireAfterType',
                           'ExpireAtDayTimeMinute'];

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
    public function productBase()
    {
        return $this->belongsTo(ProductBase::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appGroup()
    {
        return $this->belongsTo(AppGroup::class, 'AppGroupId', 'AppGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productTimePeriod()
    {
        return $this->hasOne(ProductTimePeriod::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceLineTimes()
    {
        return $this->hasMany(InvoiceLineTime::class, 'ProductTimeId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productOLTimes()
    {
        return $this->hasMany(ProductOLTime::class, 'ProductTimeId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function disallowedHostGroups()
    {
        return $this->belongsToMany(HostGroup::class,
                                    'ProductTimeHostDisallowed',
                                    'ProductId',
                                    'HostGroupId')
                    ->as('options')
                    ->using(ProductTimeHostDisallowed::class)
                    ->withPivot(['IsDisallowed',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productTimeHostDisalloweds()
    {
        return $this->hasMany(ProductTimeHostDisallowed::class, 'ProductTimeId', 'ProductId');
    }
}
