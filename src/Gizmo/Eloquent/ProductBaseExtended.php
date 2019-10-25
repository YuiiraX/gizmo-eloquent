<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductBaseExtended
 *
 * @property int                                                                                  $ProductId
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoiceLineProduct[] $invoiceLineProducts
 * @property-read int|null                                                                        $invoice_line_products_count
 * @property-read \YuiiraX\Gizmo\Eloquent\Product                                                       $product
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBase                                                   $productBase
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBundle                                                 $productBundle
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductOLProduct[]   $productOLProducts
 * @property-read int|null                                                                        $product_o_l_products_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBaseExtended newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBaseExtended newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBaseExtended query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBaseExtended whereProductId($value)
 * @mixin \Eloquent
 */
class ProductBaseExtended extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductBaseExtended';

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
    public function productBase()
    {
        return $this->belongsTo(ProductBase::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne(Product::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productBundle()
    {
        return $this->hasOne(ProductBundle::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceLineProducts()
    {
        return $this->hasMany(InvoiceLineProduct::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productOLProducts()
    {
        return $this->hasMany(ProductOLProduct::class, 'ProductId', 'ProductId');
    }
}
