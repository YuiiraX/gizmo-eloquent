<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\RefundInvoicePayment
 *
 * @property int                                   $RefundId
 * @property int                                   $InvoicePaymentId
 * @property int                                   $InvoiceId
 * @property-read \Yuiirax\Gizmo\Eloquent\Invoice        $invoice
 * @property-read \Yuiirax\Gizmo\Eloquent\InvoicePayment $invoicePayment
 * @property-read \Yuiirax\Gizmo\Eloquent\Refund         $refund
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RefundInvoicePayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RefundInvoicePayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RefundInvoicePayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RefundInvoicePayment whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RefundInvoicePayment whereInvoicePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RefundInvoicePayment whereRefundId($value)
 * @mixin \Eloquent
 */
class RefundInvoicePayment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'RefundInvoicePayment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'RefundId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['InvoicePaymentId',
                           'InvoiceId'];

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
    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'InvoiceId', 'InvoiceId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoicePayment()
    {
        return $this->belongsTo(InvoicePayment::class, 'InvoicePaymentId', 'InvoicePaymentId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function refund()
    {
        return $this->belongsTo(Refund::class, 'RefundId', 'RefundId');
    }
}
