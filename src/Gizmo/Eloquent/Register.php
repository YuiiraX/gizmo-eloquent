<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\Register
 *
 * @property int                                                                                   $RegisterId
 * @property int                                                                                   $Number
 * @property string                                                                                $Name
 * @property string|null                                                                           $MacAddress
 * @property float                                                                                 $StartCash
 * @property int|null                                                                              $IdleTimeout
 * @property int                                                                                   $Options
 * @property bool                                                                                  $IsDeleted
 * @property int|null                                                                              $ModifiedById
 * @property string|null                                                                           $ModifiedTime
 * @property int|null                                                                              $CreatedById
 * @property string                                                                                $CreatedTime
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                              $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\DepositPayment[]      $depositPayments
 * @property-read int|null                                                                         $deposit_payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\DepositTransaction[]  $depositTransactions
 * @property-read int|null                                                                         $deposit_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoiceLine[]         $invoiceLines
 * @property-read int|null                                                                         $invoice_lines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoicePayment[]      $invoicePayments
 * @property-read int|null                                                                         $invoice_payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Invoice[]             $invoices
 * @property-read int|null                                                                         $invoices_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                              $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductOL[]           $orderLines
 * @property-read int|null                                                                         $order_lines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductOrder[]        $orders
 * @property-read int|null                                                                         $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Payment[]             $payments
 * @property-read int|null                                                                         $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\PointTransaction[]    $pointTransaction
 * @property-read int|null                                                                         $point_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Refund[]              $refunds
 * @property-read int|null                                                                         $refunds_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\RegisterTransaction[] $registerTransactions
 * @property-read int|null                                                                         $register_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Shift[]               $shifts
 * @property-read int|null                                                                         $shifts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\VoidTransaction[]     $voidTransactions
 * @property-read int|null                                                                         $void_transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereIdleTimeout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereMacAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Register whereStartCash($value)
 * @mixin \Eloquent
 */
class Register extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Register';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'RegisterId';

    /**
     * @var array
     */
    protected $fillable = ['Number',
                           'Name',
                           'MacAddress',
                           'StartCash',
                           'IdleTimeout',
                           'Options',
                           'IsDeleted',
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
    public function depositPayments()
    {
        return $this->hasMany(DepositPayment::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depositTransactions()
    {
        return $this->hasMany(DepositTransaction::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceLines()
    {
        return $this->hasMany(InvoiceLine::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicePayments()
    {
        return $this->hasMany(InvoicePayment::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pointTransaction()
    {
        return $this->hasMany(PointTransaction::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderLines()
    {
        return $this->hasMany(ProductOL::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(ProductOrder::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds()
    {
        return $this->hasMany(Refund::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registerTransactions()
    {
        return $this->hasMany(RegisterTransaction::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shifts()
    {
        return $this->hasMany(Shift::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function voidTransactions()
    {
        return $this->hasMany(VoidTransaction::class, 'RegisterId', 'RegisterId');
    }
}
