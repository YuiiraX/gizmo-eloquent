<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductOL
 *
 * @property int                                       $ProductOLId
 * @property int                                       $ProductOrderId
 * @property int                                       $UserId
 * @property string                                    $ProductName
 * @property float                                     $Quantity
 * @property float                                     $UnitPrice
 * @property float                                     $UnitListPrice
 * @property int                                       $UnitPointsPrice
 * @property float|null                                $UnitCost
 * @property float                                     $TaxRate
 * @property float                                     $PreTaxTotal
 * @property float                                     $Total
 * @property float                                     $TaxTotal
 * @property bool                                      $IsDeleted
 * @property bool                                      $IsVoided
 * @property int|null                                  $ModifiedById
 * @property string|null                               $ModifiedTime
 * @property int|null                                  $CreatedById
 * @property string                                    $CreatedTime
 * @property int                                       $PointsTotal
 * @property int|null                                  $Points
 * @property int                                       $PointsAward
 * @property int|null                                  $UnitPointsListPrice
 * @property float|null                                $Cost
 * @property int                                       $PayType
 * @property int|null                                  $ShiftId
 * @property int|null                                  $RegisterId
 * @property bool                                      $IsDelivered
 * @property float                                     $DeliveredQuantity
 * @property string|null                               $DeliveredTime
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null  $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember         $customer
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null  $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLSession   $productOLSession
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLTimeFixed $productOLTimeFixed
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOrder       $productOrder
 * @property-read \YuiiraX\Gizmo\Eloquent\Register|null      $register
 * @property-read \YuiiraX\Gizmo\Eloquent\Shift|null         $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereDeliveredQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereDeliveredTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereIsDelivered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereIsVoided($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL wherePayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL wherePointsAward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL wherePointsTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL wherePreTaxTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereProductOLId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereProductOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereTaxTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereUnitListPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereUnitPointsListPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereUnitPointsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOL whereUserId($value)
 * @mixin \Eloquent
 */
class ProductOL extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductOL';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductOLId';

    /**
     * @var array
     */
    protected $fillable = ['ProductOrderId',
                           'UserId',
                           'ProductName',
                           'Quantity',
                           'UnitPrice',
                           'UnitListPrice',
                           'UnitPointsPrice',
                           'UnitCost',
                           'TaxRate',
                           'PreTaxTotal',
                           'Total',
                           'TaxTotal',
                           'IsDeleted',
                           'IsVoided',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'PointsTotal',
                           'Points',
                           'PointsAward',
                           'UnitPointsListPrice',
                           'Cost',
                           'PayType',
                           'ShiftId',
                           'RegisterId',
                           'IsDelivered',
                           'DeliveredQuantity',
                           'DeliveredTime'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function bundleLine()
    {
        return $this->hasOneThrough(ProductOL::class,
                                    ProductOLExtended::class,
                                    'ProductOLId',
                                    'ProductOLId',
                                    'ProductOLId',
                                    'BundleLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productOLSession()
    {
        return $this->hasOne(ProductOLSession::class, 'ProductOLId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productOLTimeFixed()
    {
        return $this->hasOne(ProductOLTimeFixed::class, 'ProductOLId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function productOLProduct()
    {
        return $this->hasOneThrough(ProductOLProduct::class,
                                    ProductOLExtended::class,
                                    'ProductOLId',
                                    'ProductOLId',
                                    'ProductOLId',
                                    'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function productOLTime()
    {
        return $this->hasOneThrough(ProductOLTime::class,
                                    ProductOLExtended::class,
                                    'ProductOLId',
                                    'ProductOLId',
                                    'ProductOLId',
                                    'ProductOLId');
    }
}
