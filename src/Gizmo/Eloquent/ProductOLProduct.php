<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\ProductOLProduct
 *
 * @property int                                                                         $ProductOLId
 * @property int                                                                         $ProductId
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOL[] $bundledLines
 * @property-read int|null                                                               $bundled_lines_count
 * @property-read \Yuiirax\Gizmo\Eloquent\InvoiceLineProduct                                   $invoiceLineProduct
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductBaseExtended                                  $productBaseExtended
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductOLExtended                                    $productOLExtended
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLProduct whereProductOLId($value)
 * @mixin \Eloquent
 */
class ProductOLProduct extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductOLProduct';

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
    protected $fillable = ['ProductId'];

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
    public function productBaseExtended()
    {
        return $this->belongsTo(ProductBaseExtended::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoiceLineProduct()
    {
        return $this->hasOne(InvoiceLineProduct::class, 'OrderLineId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function bundledLines()
    {
        return $this->hasManyThrough(ProductOL::class,
                                     ProductOLExtended::class,
                                     'BundleLineId',
                                     'ProductOLId',
                                     'ProductOLId',
                                     'ProductOLId');
    }
}
