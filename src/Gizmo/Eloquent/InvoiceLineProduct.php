<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\InvoiceLineProduct
 *
 * @property int                                                                           $InvoiceLineId
 * @property int                                                                           $OrderLineId
 * @property int                                                                           $ProductId
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoiceLine[] $bundledLines
 * @property-read int|null                                                                 $bundled_lines_count
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineExtended                                    $invoiceLineExtended
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBaseExtended                                    $productBaseExtended
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLProduct                                       $productOLProduct
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineProduct whereInvoiceLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineProduct whereOrderLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineProduct whereProductId($value)
 * @mixin \Eloquent
 */
class InvoiceLineProduct extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InvoiceLineProduct';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'InvoiceLineId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['OrderLineId',
                           'ProductId'];

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
    public function invoiceLineExtended()
    {
        return $this->belongsTo(InvoiceLineExtended::class, 'InvoiceLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productBaseExtended()
    {
        return $this->belongsTo(ProductBaseExtended::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productOLProduct()
    {
        return $this->belongsTo(ProductOLProduct::class, 'OrderLineId', 'ProductOLId');
    }

    public function bundledLines()
    {
        return $this->hasManyThrough(InvoiceLine::class,
                                     InvoiceLineExtended::class,
                                     'BundleLineId',
                                     'InvoiceLineId',
                                     'InvoiceLineId',
                                     'InvoiceLineId');
    }
}
