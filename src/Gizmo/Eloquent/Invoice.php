<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\Invoice
 *
 * @property int                                                                              $InvoiceId
 * @property int                                                                              $ProductOrderId
 * @property int                                                                              $UserId
 * @property int                                                                              $Status
 * @property float                                                                            $SubTotal
 * @property int                                                                              $PointsTotal
 * @property float                                                                            $TaxTotal
 * @property float                                                                            $Total
 * @property float                                                                            $Outstanding
 * @property int                                                                              $OutstandngPoints
 * @property int|null                                                                         $ModifiedById
 * @property string|null                                                                      $ModifiedTime
 * @property int|null                                                                         $CreatedById
 * @property string                                                                           $CreatedTime
 * @property int|null                                                                         $ShiftId
 * @property int|null                                                                         $RegisterId
 * @property bool                                                                             $IsVoided
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                         $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember                                                $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoiceLine[]    $invoiceLines
 * @property-read int|null                                                                    $invoice_lines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoicePayment[] $invoicePayments
 * @property-read int|null                                                                    $invoice_payments_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                         $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductOrder                                              $productOrder
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Refund[]         $refunds
 * @property-read int|null                                                                    $refunds_count
 * @property-read \Yuiirax\Gizmo\Eloquent\Register|null                                             $register
 * @property-read \Yuiirax\Gizmo\Eloquent\Shift|null                                                $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice ofPeriod($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereIsVoided($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereOutstanding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereOutstandngPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice wherePointsTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereProductOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereTaxTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Invoice whereUserId($value)
 * @mixin \Eloquent
 */
class Invoice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Invoice';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'InvoiceId';

    /**
     * @var array
     */
    protected $fillable = ['ProductOrderId',
                           'UserId',
                           'Status',
                           'SubTotal',
                           'PointsTotal',
                           'TaxTotal',
                           'Total',
                           'Outstanding',
                           'OutstandngPoints',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'ShiftId',
                           'RegisterId',
                           'IsVoided'];

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
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param                                       $start
     * @param                                       $end
     *
     * @return \Illuminate\Database\Eloquent\Builder mixed
     */
    public function scopeOfPeriod($query, $start, $end)
    {
        return $query->whereBetween('CreatedTime', [$start,
                                                    $end]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productOrder()
    {
        return $this->belongsTo(ProductOrder::class, 'ProductOrderId', 'ProductOrderId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function register()
    {
        return $this->belongsTo(Register::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shift()
    {
        return $this->belongsTo(Shift::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(UserMember::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(UserOperator::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy()
    {
        return $this->belongsTo(UserOperator::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceLines()
    {
        return $this->hasMany(InvoiceLine::class, 'InvoiceId', 'InvoiceId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicePayments()
    {
        return $this->hasMany(InvoicePayment::class, 'InvoiceId', 'InvoiceId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function voidTransaction()
    {
        return $this->hasOneThrough(VoidTransaction::class,
                                    VoidInvoice::class,
                                    'InvoiceId',
                                    'VoidId',
                                    'InvoiceId',
                                    'VoidId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function refunds()
    {
        return $this->hasManyThrough(Refund::class,
                                     RefundInvoicePayment::class,
                                     'InvoiceId',
                                     'RefundId',
                                     'InvoiceId',
                                     'RefundId');
    }


}
