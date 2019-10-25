<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\ProductPeriod
 *
 * @property int                                                                                $ProductId
 * @property string|null                                                                        $StartDate
 * @property string|null                                                                        $EndDate
 * @property int                                                                                $Options
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductPeriodDay[] $days
 * @property-read int|null                                                                      $days_count
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductBase                                                 $productBase
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriod query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriod whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriod whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriod whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductPeriod whereStartDate($value)
 * @mixin \Eloquent
 */
class ProductPeriod extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductPeriod';

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
    public function productBase()
    {
        return $this->belongsTo(ProductBase::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function days()
    {
        return $this->hasMany(ProductPeriodDay::class, 'ProductPeriodId', 'ProductId');
    }
}
