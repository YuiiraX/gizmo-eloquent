<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\BillRate
 *
 * @property int                                                                                 $BillRateId
 * @property int                                                                                 $BillProfileId
 * @property float                                                                               $StartFee
 * @property float                                                                               $MinimumFee
 * @property float                                                                               $Rate
 * @property int                                                                                 $ChargeEvery
 * @property int                                                                                 $ChargeAfter
 * @property int                                                                                 $Options
 * @property bool                                                                                $IsDefault
 * @property-read \YuiiraX\Gizmo\Eloquent\BillProfile                                                  $billProfile
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\BillRatePeriodDay[] $days
 * @property-read int|null                                                                       $days_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UsageRate[]         $rates
 * @property-read int|null                                                                       $rates_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\BillRateStep[]      $steps
 * @property-read int|null                                                                       $steps_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereBillProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereBillRateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereChargeAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereChargeEvery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereMinimumFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRate whereStartFee($value)
 * @mixin \Eloquent
 */
class BillRate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BillRate';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'BillRateId';

    /**
     * @var array
     */
    protected $fillable = ['BillProfileId',
                           'StartFee',
                           'MinimumFee',
                           'Rate',
                           'ChargeEvery',
                           'ChargeAfter',
                           'Options',
                           'IsDefault'];

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
    public function billProfile()
    {
        return $this->belongsTo(BillProfile::class, 'BillProfileId', 'BillProfileId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function days()
    {
        return $this->hasMany(BillRatePeriodDay::class, 'BillRateId', 'BillRateId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function steps()
    {
        return $this->hasMany(BillRateStep::class, 'BillRateId', 'BillRateId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rates()
    {
        return $this->hasMany(UsageRate::class, 'BillRateId', 'BillRateId');
    }
}
