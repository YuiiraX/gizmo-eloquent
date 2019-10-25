<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\BillRatePeriodDay
 *
 * @property int                                                                                     $BillRatePeriodDayId
 * @property int                                                                                     $BillRateId
 * @property int                                                                                     $Day
 * @property-read \Yuiirax\Gizmo\Eloquent\BillRate                                                         $billRate
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BillRatePeriodDayTime[] $times
 * @property-read int|null                                                                           $times_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillRatePeriodDay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillRatePeriodDay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillRatePeriodDay query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillRatePeriodDay whereBillRateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillRatePeriodDay whereBillRatePeriodDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillRatePeriodDay whereDay($value)
 * @mixin \Eloquent
 */
class BillRatePeriodDay extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BillRatePeriodDay';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'BillRatePeriodDayId';

    /**
     * @var array
     */
    protected $fillable = ['BillRateId',
                           'Day'];

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
    public function billRate()
    {
        return $this->belongsTo(BillRate::class, 'BillRateId', 'BillRateId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function times()
    {
        return $this->hasMany(BillRatePeriodDayTime::class, 'PeriodDayId', 'BillRatePeriodDayId');
    }
}
