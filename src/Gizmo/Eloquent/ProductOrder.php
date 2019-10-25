<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\ProductOrder
 *
 * @property int                                                                         $ProductOrderId
 * @property int                                                                         $UserId
 * @property int                                                                         $Status
 * @property float                                                                       $SubTotal
 * @property float                                                                       $Total
 * @property int                                                                         $PointsTotal
 * @property float                                                                       $Tax
 * @property int|null                                                                    $HostId
 * @property bool                                                                        $IsDeleted
 * @property bool                                                                        $IsVoided
 * @property int|null                                                                    $ModifiedById
 * @property string|null                                                                 $ModifiedTime
 * @property int|null                                                                    $CreatedById
 * @property string                                                                      $CreatedTime
 * @property int|null                                                                    $ShiftId
 * @property int|null                                                                    $RegisterId
 * @property int|null                                                                    $PreferedPaymentMethodId
 * @property bool                                                                        $IsDelivered
 * @property string|null                                                                 $DeliveredTime
 * @property int                                                                         $Source
 * @property string|null                                                                 $UserNote
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                    $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember                                           $customer
 * @property-read \Yuiirax\Gizmo\Eloquent\Host|null                                            $host
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Invoice[]   $invoices
 * @property-read int|null                                                               $invoices_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                    $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOL[] $orderLines
 * @property-read int|null                                                               $order_lines_count
 * @property-read \Yuiirax\Gizmo\Eloquent\PaymentMethod|null                                   $paymentMethod
 * @property-read \Yuiirax\Gizmo\Eloquent\Register|null                                        $register
 * @property-read \Yuiirax\Gizmo\Eloquent\Shift|null                                           $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereDeliveredTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereIsDelivered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereIsVoided($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder wherePointsTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder wherePreferedPaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereProductOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOrder whereUserNote($value)
 * @mixin \Eloquent
 */
class ProductOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductOrder';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductOrderId';

    /**
     * @var array
     */
    protected $fillable = ['UserId',
                           'Status',
                           'SubTotal',
                           'Total',
                           'PointsTotal',
                           'Tax',
                           'HostId',
                           'IsDeleted',
                           'IsVoided',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'ShiftId',
                           'RegisterId',
                           'PreferedPaymentMethodId',
                           'IsDelivered',
                           'DeliveredTime',
                           'Source',
                           'UserNote'];

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
    public function host()
    {
        return $this->belongsTo(Host::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'PreferedPaymentMethodId', 'PaymentMethodId');
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
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'ProductOrderId', 'ProductOrderId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderLines()
    {
        return $this->hasMany(ProductOL::class, 'ProductOrderId', 'ProductOrderId');
    }
}
