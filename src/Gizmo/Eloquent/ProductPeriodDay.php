<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\ProductPeriodDay
 *
 * @property int                                                                                    $ProductPeriodDayId
 * @property int                                                                                    $ProductPeriodId
 * @property int                                                                                    $Day
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductPeriod                                                   $productPeriod
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductPeriodDayTime[] $times
 * @property-read int|null                                                                          $times_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDay query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDay whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDay whereProductPeriodDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriodDay whereProductPeriodId($value)
 * @mixin \Eloquent
 */
class ProductPeriodDay extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductPeriodDay';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductPeriodDayId';

    /**
     * @var array
     */
    protected $fillable = ['ProductPeriodId',
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
    public function productPeriod()
    {
        return $this->belongsTo(ProductPeriod::class, 'ProductPeriodId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function times()
    {
        return $this->hasMany(ProductPeriodDayTime::class, 'PeriodDayId', 'ProductPeriodDayId');
    }
}
