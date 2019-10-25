<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\ProductPeriodDayTime
 *
 * @property int                                     $PeriodDayId
 * @property int                                     $StartSecond
 * @property int                                     $EndSecond
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductPeriodDay $productPeriodDay
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDayTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDayTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDayTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDayTime whereEndSecond($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDayTime wherePeriodDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDayTime whereStartSecond($value)
 * @mixin \Eloquent
 */
class ProductPeriodDayTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductPeriodDayTime';

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
    public function productPeriodDay()
    {
        return $this->belongsTo(ProductPeriodDay::class, 'PeriodDayId', 'ProductPeriodDayId');
    }
}
