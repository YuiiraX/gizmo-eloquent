<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductTimePeriod
 *
 * @property int                                                                                    $ProductId
 * @property string|null                                                                            $StartDate
 * @property string|null                                                                            $EndDate
 * @property int                                                                                    $Options
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductTimePeriodDay[] $days
 * @property-read int|null                                                                          $days_count
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductTime                                                     $productTime
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriod query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriod whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriod whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriod whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductTimePeriod whereStartDate($value)
 * @mixin \Eloquent
 */
class ProductTimePeriod extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductTimePeriod';

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
    protected $fillable = ['StartDate',
                           'EndDate',
                           'Options'];

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
    public function productTime()
    {
        return $this->belongsTo(ProductTime::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function days()
    {
        return $this->hasMany(ProductTimePeriodDay::class, 'ProductTimePeriodId', 'ProductId');
    }
}
