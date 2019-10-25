<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\Shift
 *
 * @property int                                                                                   $ShiftId
 * @property bool                                                                                  $IsActive
 * @property int                                                                                   $OperatorId
 * @property int                                                                                   $RegisterId
 * @property string                                                                                $Start
 * @property float                                                                                 $StartCash
 * @property bool                                                                                  $IsEnding
 * @property int|null                                                                              $EndedById
 * @property string|null                                                                           $EndTime
 * @property int|null                                                                              $ModifiedById
 * @property string|null                                                                           $ModifiedTime
 * @property int|null                                                                              $CreatedById
 * @property string                                                                                $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ShiftCount[]          $shiftCounts
 * @property-read int|null                                                                         $shiftCounts_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                              $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DepositPayment[]      $depositPayments
 * @property-read int|null                                                                         $deposit_payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DepositTransaction[]  $depositTransactions
 * @property-read int|null                                                                         $deposit_transactions_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                              $endedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoiceLine[]         $invoiceLines
 * @property-read int|null                                                                         $invoice_lines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoicePayment[]      $invoicePayments
 * @property-read int|null                                                                         $invoice_payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Invoice[]             $invoices
 * @property-read int|null                                                                         $invoices_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                              $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator                                                   $operator
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOL[]           $orderLines
 * @property-read int|null                                                                         $order_lines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOrder[]        $orders
 * @property-read int|null                                                                         $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PaymentMethod[]       $paymentMethods
 * @property-read int|null                                                                         $payment_methods_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Payment[]             $payments
 * @property-read int|null                                                                         $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PointTransaction[]    $pointTransaction
 * @property-read int|null                                                                         $point_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Refund[]              $refunds
 * @property-read int|null                                                                         $refunds_count
 * @property-read \Yuiirax\Gizmo\Eloquent\Register                                                       $register
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\RegisterTransaction[] $registerTransactions
 * @property-read int|null                                                                         $register_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\VoidTransaction[]     $voidTransactions
 * @property-read int|null                                                                         $void_transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereEndedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereIsEnding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereOperatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift whereStartCash($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Shift ofPeriod($start, $end)
 */
class Shift extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Shift';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ShiftId';

    /**
     * @var array
     */
    protected $fillable = ['IsActive',
                           'OperatorId',
                           'RegisterId',
                           'Start',
                           'StartCash',
                           'IsEnding',
                           'EndedById',
                           'EndTime',
                           'ModifiedById',
                           'ModifiedTime',
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
        return $query->whereBetween('CreatedTime', [$start,
                                                    $end]);
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
    public function createdBy()
    {
        return $this->belongsTo(UserOperator::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function endedBy()
    {
        return $this->belongsTo(UserOperator::class, 'EndedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy()
    {
        return $this->belongsTo(UserOperator::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operator()
    {
        return $this->belongsTo(UserOperator::class, 'OperatorId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depositPayments()
    {
        return $this->hasMany(DepositPayment::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depositTransactions()
    {
        return $this->hasMany(DepositTransaction::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceLines()
    {
        return $this->hasMany(InvoiceLine::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicePayments()
    {
        return $this->hasMany(InvoicePayment::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pointTransaction()
    {
        return $this->hasMany(PointTransaction::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderLines()
    {
        return $this->hasMany(ProductOL::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(ProductOrder::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds()
    {
        return $this->hasMany(Refund::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registerTransactions()
    {
        return $this->hasMany(RegisterTransaction::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function voidTransactions()
    {
        return $this->hasMany(VoidTransaction::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shiftCounts()
    {
        return $this->hasMany(ShiftCount::class, 'ShiftId', 'ShiftId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function paymentMethods()
    {
        return $this->belongsToMany(PaymentMethod::class,
                                    'ShiftCount',
                                    'ShiftId',
                                    'PaymentMethodId')
                    ->as('counts')
                    ->using(ShiftCount::class)
                    ->withPivot(['StartCash',
                                 'Sales',
                                 'Deposits',
                                 'PayIns',
                                 'Withdrawals',
                                 'PayOuts',
                                 'Refunds',
                                 'Voids',
                                 'Expected',
                                 'Actual',
                                 'Difference',
                                 'Note',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }
}
