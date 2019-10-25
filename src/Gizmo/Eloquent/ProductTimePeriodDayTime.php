<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\ProductTimePeriodDayTime
 *
 * @property int                                         $PeriodDayId
 * @property int                                         $StartSecond
 * @property int                                         $EndSecond
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductTimePeriodDay $productTimePeriodDay
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTimePeriodDayTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTimePeriodDayTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTimePeriodDayTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTimePeriodDayTime whereEndSecond($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTimePeriodDayTime wherePeriodDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTimePeriodDayTime whereStartSecond($value)
 * @mixin \Eloquent
 */
class ProductTimePeriodDayTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductTimePeriodDayTime';

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
    public function productTimePeriodDay()
    {
        return $this->belongsTo(ProductTimePeriodDay::class, 'PeriodDayId', 'ProductTimePeriodDayId');
    }
}
