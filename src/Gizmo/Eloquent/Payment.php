<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\Payment
 *
 * @property int                                                                              $PaymentId
 * @property int                                                                              $UserId
 * @property int                                                                              $PaymentMethodId
 * @property float                                                                            $Amount
 * @property float                                                                            $AmountReceived
 * @property bool                                                                             $IsDeleted
 * @property bool                                                                             $IsVoided
 * @property int|null                                                                         $DepositTransactionId
 * @property int|null                                                                         $PointTransactionId
 * @property int|null                                                                         $ModifiedById
 * @property string|null                                                                      $ModifiedTime
 * @property int|null                                                                         $CreatedById
 * @property string                                                                           $CreatedTime
 * @property int|null                                                                         $ShiftId
 * @property int|null                                                                         $RegisterId
 * @property float                                                                            $RefundedAmount
 * @property int                                                                              $RefundStatus
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                         $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember                                                $customer
 * @property-read \Yuiirax\Gizmo\Eloquent\DepositTransaction|null                                   $depositTransaction
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DepositPayment[] $deposits
 * @property-read int|null                                                                    $deposits_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoicePayment[] $invoices
 * @property-read int|null                                                                    $invoices_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                         $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\PaymentMethod                                             $paymentMethod
 * @property-read \Yuiirax\Gizmo\Eloquent\PointTransaction|null                                     $pointTransaction
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Refund[]         $refunds
 * @property-read int|null                                                                    $refunds_count
 * @property-read \Yuiirax\Gizmo\Eloquent\Register|null                                             $register
 * @property-read \Yuiirax\Gizmo\Eloquent\Shift|null                                                $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereAmountReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereDepositTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereIsVoided($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment wherePointTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereRefundStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereRefundedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Payment whereUserId($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Payment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PaymentId';

    /**
     * @var array
     */
    protected $fillable = ['UserId',
                           'PaymentMethodId',
                           'Amount',
                           'AmountReceived',
                           'IsDeleted',
                           'IsVoided',
                           'DepositTransactionId',
                           'PointTransactionId',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'ShiftId',
                           'RegisterId',
                           'RefundedAmount',
                           'RefundStatus'];

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
    public function depositTransaction()
    {
        return $this->belongsTo(DepositTransaction::class, 'DepositTransactionId', 'DepositTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'PaymentMethodId', 'PaymentMethodId');
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
    public function deposits()
    {
        return $this->hasMany(DepositPayment::class, 'PaymentId', 'PaymentId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany(InvoicePayment::class, 'PaymentId', 'PaymentId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds()
    {
        return $this->hasMany(Refund::class, 'PaymentId', 'PaymentId');
    }

}
