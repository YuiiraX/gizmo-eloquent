<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\InvoiceLineExtended
 *
 * @property int                                            $InvoiceLineId
 * @property int|null                                       $BundleLineId
 * @property int|null                                       $StockTransactionId
 * @property int|null                                       $StockReturnTransactionId
 * @property-read \Yuiirax\Gizmo\Eloquent\InvoiceLineProduct|null $bundleLine
 * @property-read \Yuiirax\Gizmo\Eloquent\InvoiceLine             $invoiceLine
 * @property-read \Yuiirax\Gizmo\Eloquent\InvoiceLineProduct      $invoiceLineProduct
 * @property-read \Yuiirax\Gizmo\Eloquent\InvoiceLineTime         $invoiceLineTime
 * @property-read \Yuiirax\Gizmo\Eloquent\StockTransaction|null   $stockReturnTransaction
 * @property-read \Yuiirax\Gizmo\Eloquent\StockTransaction|null   $stockTransaction
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\InvoiceLineExtended newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\InvoiceLineExtended newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\InvoiceLineExtended query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\InvoiceLineExtended whereBundleLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\InvoiceLineExtended whereInvoiceLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\InvoiceLineExtended whereStockReturnTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\InvoiceLineExtended whereStockTransactionId($value)
 * @mixin \Eloquent
 */
class InvoiceLineExtended extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InvoiceLineExtended';

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
    protected $fillable = ['BundleLineId',
                           'StockTransactionId',
                           'StockReturnTransactionId'];

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
    public function invoiceLine()
    {
        return $this->belongsTo(InvoiceLine::class, 'InvoiceLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bundleLine()
    {
        return $this->belongsTo(InvoiceLineProduct::class, 'BundleLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stockTransaction()
    {
        return $this->belongsTo(StockTransaction::class, 'StockTransactionId', 'StockTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stockReturnTransaction()
    {
        return $this->belongsTo(StockTransaction::class, 'StockReturnTransactionId', 'StockTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoiceLineProduct()
    {
        return $this->hasOne(InvoiceLineProduct::class, 'InvoiceLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoiceLineTime()
    {
        return $this->hasOne(InvoiceLineTime::class, 'InvoiceLineId', 'InvoiceLineId');
    }
}
