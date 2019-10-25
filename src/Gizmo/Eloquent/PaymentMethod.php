<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\PaymentMethod
 *
 * @property int                                                                            $PaymentMethodId
 * @property string                                                                         $Name
 * @property string|null                                                                    $Description
 * @property float                                                                          $Surcharge
 * @property int                                                                            $DisplayOrder
 * @property bool                                                                           $IsEnabled
 * @property int                                                                            $Options
 * @property int|null                                                                       $ModifiedById
 * @property string|null                                                                    $ModifiedTime
 * @property int|null                                                                       $CreatedById
 * @property string                                                                         $CreatedTime
 * @property bool                                                                           $IsClient
 * @property bool                                                                           $IsManager
 * @property bool                                                                           $IsPortal
 * @property bool                                                                           $IsDeleted
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ShiftCount[]   $_shifts
 * @property-read int|null                                                                  $_shifts_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                       $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                       $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOrder[] $orders
 * @property-read int|null                                                                  $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Payment[]      $payments
 * @property-read int|null                                                                  $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Refund[]       $refunds
 * @property-read int|null                                                                  $refunds_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Shift[]        $shifts
 * @property-read int|null                                                                  $shifts_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereIsClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereIsManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereIsPortal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PaymentMethod whereSurcharge($value)
 * @mixin \Eloquent
 */
class PaymentMethod extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'PaymentMethod';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PaymentMethodId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'Description',
                           'Surcharge',
                           'DisplayOrder',
                           'IsEnabled',
                           'Options',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'IsClient',
                           'IsManager',
                           'IsPortal',
                           'IsDeleted'];

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
    public function payments()
    {
        return $this->hasMany(Payment::class, 'PaymentMethodId', 'PaymentMethodId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(ProductOrder::class, 'PreferedPaymentMethodId', 'PaymentMethodId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds()
    {
        return $this->hasMany(Refund::class, 'RefundMethodId', 'PaymentMethodId');
    }

    public function shifts()
    {
        return $this->belongsToMany(Shift::class,
                                    'ShiftCount',
                                    'PaymentMethodId',
                                    'ShiftId')
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _shifts()
    {
        return $this->hasMany(ShiftCount::class, 'PaymentMethodId', 'PaymentMethodId');
    }

}
