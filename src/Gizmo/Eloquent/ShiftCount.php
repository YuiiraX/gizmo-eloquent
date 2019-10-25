<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * YuiiraX\Gizmo\Eloquent\ShiftCount
 *
 * @property int                                      $ShiftCountId
 * @property int                                      $ShiftId
 * @property int                                      $PaymentMethodId
 * @property float                                    $StartCash
 * @property float                                    $Sales
 * @property float                                    $Deposits
 * @property float                                    $PayIns
 * @property float                                    $Withdrawals
 * @property float                                    $PayOuts
 * @property float                                    $Refunds
 * @property float                                    $Voids
 * @property float                                    $Expected
 * @property float                                    $Actual
 * @property float                                    $Difference
 * @property string|null                              $Note
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\PaymentMethod     $paymentMethod
 * @property-read \YuiiraX\Gizmo\Eloquent\Shift             $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereActual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereDeposits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereDifference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereExpected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount wherePayIns($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount wherePayOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereRefunds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereSales($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereShiftCountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereStartCash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereVoids($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ShiftCount whereWithdrawals($value)
 * @mixin \Eloquent
 */
class ShiftCount extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ShiftCount';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ShiftCountId';

    /**
     * @var array
     */
    protected $fillable = ['ShiftId',
                           'PaymentMethodId',
                           'StartCash',
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
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'PaymentMethodId', 'PaymentMethodId');
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy()
    {
        return $this->belongsTo(UserOperator::class, 'ModifiedById', 'UserId');
    }
}
