<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\BillRatePeriodDayTime
 *
 * @property int                                      $PeriodDayId
 * @property int                                      $StartSecond
 * @property int                                      $EndSecond
 * @property-read \YuiiraX\Gizmo\Eloquent\BillRatePeriodDay $billRatePeriodDay
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRatePeriodDayTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRatePeriodDayTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRatePeriodDayTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRatePeriodDayTime whereEndSecond($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRatePeriodDayTime wherePeriodDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRatePeriodDayTime whereStartSecond($value)
 * @mixin \Eloquent
 */
class BillRatePeriodDayTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BillRatePeriodDayTime';

    /**
     * @var array
     */
    protected $fillable = [];

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
    public function billRatePeriodDay()
    {
        return $this->belongsTo(BillRatePeriodDay::class, 'PeriodDayId', 'BillRatePeriodDayId');
    }
}
