<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductOLTime
 *
 * @property int                                      $ProductOLId
 * @property int                                      $ProductTimeId
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineTime   $invoiceLineTime
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLExtended $productOLExtended
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductTime       $productTime
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLTime whereProductOLId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLTime whereProductTimeId($value)
 * @mixin \Eloquent
 */
class ProductOLTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductOLTime';

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
    protected $fillable = ['ProductTimeId'];

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
    public function productOLExtended()
    {
        return $this->belongsTo(ProductOLExtended::class, 'ProductOLId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productTime()
    {
        return $this->belongsTo(ProductTime::class, 'ProductTimeId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoiceLineTime()
    {
        return $this->hasOne(InvoiceLineTime::class, 'OrderLineId', 'ProductOLId');
    }
}
