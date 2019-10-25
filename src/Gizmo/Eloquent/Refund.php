<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\Refund
 *
 * @property int                                            $RefundId
 * @property int                                            $PaymentId
 * @property float                                          $Amount
 * @property int|null                                       $DepositTransactionId
 * @property int                                            $RefundMethodId
 * @property int|null                                       $PointTransactionId
 * @property int|null                                       $ShiftId
 * @property int|null                                       $RegisterId
 * @property int|null                                       $CreatedById
 * @property string                                         $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null       $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\DepositTransaction|null $depositTransaction
 * @property-read \Yuiirax\Gizmo\Eloquent\Payment                 $payment
 * @property-read \Yuiirax\Gizmo\Eloquent\PointTransaction|null   $pointTransaction
 * @property-read \Yuiirax\Gizmo\Eloquent\PaymentMethod           $refundMethod
 * @property-read \Yuiirax\Gizmo\Eloquent\Register|null           $register
 * @property-read \Yuiirax\Gizmo\Eloquent\Shift|null              $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund ofPeriod($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund whereDepositTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund wherePointTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund whereRefundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund whereRefundMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Refund whereShiftId($value)
 * @mixin \Eloquent
 */
class Refund extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Refund';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'RefundId';

    /**
     * @var array
     */
    protected $fillable = ['PaymentId',
                           'Amount',
                           'DepositTransactionId',
                           'RefundMethodId',
                           'PointTransactionId',
                           'ShiftId',
                           'RegisterId',
                           'CreatedById',
                           'CreatedTime'];

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
        return $query->whereBetween('createdTime', [$start,
                                                    $end]);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function depositTransaction()
    {
        return $this->belongsTo(DepositTransaction::class, 'DepositTransactionId', 'DepositTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'PaymentId', 'PaymentId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function refundMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'RefundMethodId', 'PaymentMethodId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pointTransaction()
    {
        return $this->belongsTo(PointTransaction::class, 'PointTransactionId', 'PointTransactionId');
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
    public function createdBy()
    {
        return $this->belongsTo(UserOperator::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function invoicePayment()
    {
        return $this->hasOneThrough(InvoicePayment::class,
                                    RefundInvoicePayment::class,
                                    'RefundId',
                                    'InvoicePaymentId',
                                    'RefundId',
                                    'InvoicePaymentId');
    }
}
