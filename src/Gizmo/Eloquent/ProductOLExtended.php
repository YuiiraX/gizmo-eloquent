<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductOLExtended
 *
 * @property int                                          $ProductOLId
 * @property int|null                                     $BundleLineId
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLProduct|null $bundleLine
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOL             $productOL
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLProduct      $productOLProduct
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLTime         $productOLTime
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLExtended newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLExtended newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLExtended query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLExtended whereBundleLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLExtended whereProductOLId($value)
 * @mixin \Eloquent
 */
class ProductOLExtended extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductOLExtended';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductOLId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['BundleLineId'];

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
    public function productOL()
    {
        return $this->belongsTo(ProductOL::class, 'ProductOLId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bundleLine()
    {
        return $this->belongsTo(ProductOLProduct::class, 'BundleLineId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productOLProduct()
    {
        return $this->hasOne(ProductOLProduct::class, 'ProductOLId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productOLTime()
    {
        return $this->hasOne(ProductOLTime::class, 'ProductOLId', 'ProductOLId');
    }
}
