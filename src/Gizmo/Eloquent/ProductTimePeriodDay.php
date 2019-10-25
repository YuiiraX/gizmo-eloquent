<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductTimePeriodDay
 *
 * @property int                                                                                        $ProductTimePeriodDayId
 * @property int                                                                                        $ProductTimePeriodId
 * @property int                                                                                        $Day
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductTimePeriod                                                   $productTimePeriod
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductTimePeriodDayTime[] $times
 * @property-read int|null                                                                              $times_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriodDay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriodDay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriodDay query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriodDay whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriodDay whereProductTimePeriodDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriodDay whereProductTimePeriodId($value)
 * @mixin \Eloquent
 */
class ProductTimePeriodDay extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductTimePeriodDay';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductTimePeriodDayId';

    /**
     * @var array
     */
    protected $fillable = ['ProductTimePeriodId',
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
    public function productTimePeriod()
    {
        return $this->belongsTo(ProductTimePeriod::class, 'ProductTimePeriodId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function times()
    {
        return $this->hasMany(ProductTimePeriodDayTime::class, 'PeriodDayId', 'ProductTimePeriodDayId');
    }
}
