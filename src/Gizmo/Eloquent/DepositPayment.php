<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\DepositPayment
 *
 * @property int                                       $DepositPaymentId
 * @property int                                       $DepositTransactionId
 * @property int                                       $PaymentId
 * @property int                                       $UserId
 * @property int|null                                  $ModifiedById
 * @property string|null                               $ModifiedTime
 * @property int|null                                  $CreatedById
 * @property string                                    $CreatedTime
 * @property int|null                                  $ShiftId
 * @property int|null                                  $RegisterId
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null  $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember         $customer
 * @property-read \Yuiirax\Gizmo\Eloquent\DepositTransaction $depositTransaction
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null  $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\Payment            $payment
 * @property-read \Yuiirax\Gizmo\Eloquent\Register|null      $register
 * @property-read \Yuiirax\Gizmo\Eloquent\Shift|null         $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereDepositPaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereDepositTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositPayment whereUserId($value)
 * @mixin \Eloquent
 */
class DepositPayment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'DepositPayment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'DepositPaymentId';

    /**
     * @var array
     */
    protected $fillable = ['DepositTransactionId',
                           'PaymentId',
                           'UserId',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'ShiftId',
                           'RegisterId'];

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
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'PaymentId', 'PaymentId');
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
}
