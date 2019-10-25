<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\InvoiceLine
 *
 * @property int                                          $InvoiceLineId
 * @property int                                          $InvoiceId
 * @property int                                          $UserId
 * @property string                                       $ProductName
 * @property float                                        $Quantity
 * @property float                                        $UnitPrice
 * @property float                                        $UnitListPrice
 * @property float                                        $TaxRate
 * @property float                                        $PreTaxTotal
 * @property float                                        $Total
 * @property float                                        $TaxTotal
 * @property int|null                                     $PointsTransactionId
 * @property bool                                         $IsDeleted
 * @property bool                                         $IsVoided
 * @property int|null                                     $ModifiedById
 * @property string|null                                  $ModifiedTime
 * @property int|null                                     $CreatedById
 * @property string                                       $CreatedTime
 * @property int                                          $PointsTotal
 * @property int|null                                     $Points
 * @property int                                          $PointsAward
 * @property int                                          $UnitPointsPrice
 * @property int|null                                     $UnitPointsListPrice
 * @property float|null                                   $UnitCost
 * @property float|null                                   $Cost
 * @property int                                          $PayType
 * @property int|null                                     $ShiftId
 * @property int|null                                     $RegisterId
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null     $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember            $customer
 * @property-read \YuiiraX\Gizmo\Eloquent\Invoice               $invoice
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineExtended   $invoiceLineExtended
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineSession    $invoiceLineSession
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineTime       $invoiceLineTime
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineTimeFixed  $invoiceLineTimeFixed
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null     $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\PointTransaction|null $pointTransaction
 * @property-read \YuiiraX\Gizmo\Eloquent\Register|null         $register
 * @property-read \YuiiraX\Gizmo\Eloquent\Shift|null            $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine ofPeriod($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereInvoiceLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereIsVoided($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine wherePayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine wherePointsAward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine wherePointsTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine wherePointsTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine wherePreTaxTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereTaxTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereUnitListPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereUnitPointsListPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereUnitPointsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLine whereUserId($value)
 * @mixin \Eloquent
 */
class InvoiceLine extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InvoiceLine';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'InvoiceLineId';

    /**
     * @var array
     */
    protected $fillable = [
        'InvoiceId',
        'UserId',
        'ProductName',
        'Quantity',
        'UnitPrice',
        'UnitListPrice',
        'TaxRate',
        'PreTaxTotal',
        'Total',
        'TaxTotal',
        'PointsTransactionId',
        'IsDeleted',
        'IsVoided',
        'PointsTotal',
        'Points',
        'PointsAward',
        'UnitPointsPrice',
        'UnitPointsListPrice',
        'UnitCost',
        'Cost',
        'PayType',
        'ShiftId',
        'RegisterId',
    ];

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
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param                                         $start
     * @param                                         $end
     *
     * @return \Illuminate\Database\Eloquent\Builder mixed
     */
    public function scopeOfPeriod($query, $start, $end)
    {
        return $query->whereBetween('createdTime', [
            $start,
            $end,
        ]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'InvoiceId', 'InvoiceId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pointTransaction()
    {
        return $this->belongsTo(PointTransaction::class, 'PointsTransactionId', 'PointTransactionId');
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
    public function stockTransaction()
    {
        return $this->hasOneThrough(StockTransaction::class,
            InvoiceLineExtended::class,
            'InvoiceLineId',
            'StockTransactionId',
            'InvoiceLineId',
            'StockTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function stockReturnTransaction()
    {
        return $this->hasOneThrough(StockTransaction::class,
            InvoiceLineExtended::class,
            'InvoiceLineId',
            'StockReturnTransactionId',
            'InvoiceLineId',
            'StockTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function bundleLine()
    {
        return $this->hasOneThrough(InvoiceLineProduct::class,
            InvoiceLineExtended::class,
            'InvoiceLineId',
            'BundleLineId',
            'InvoiceLineId',
            'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function session()
    {
        return $this->hasOneThrough(UsageSession::class,
            InvoiceLineSession::class,
            'InvoiceLineId',
            'UsageSessionId',
            'InvoiceLineId',
            'UsageSessionId');
    }

    public function invoiceLineExtended()
    {
        return $this->hasOne(invoiceLineExtended::class, 'InvoiceLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function invoiceLineProduct()
    {
        return $this->hasOneThrough(InvoiceLineProduct::class,
            InvoiceLineExtended::class,
            'InvoiceLineId',
            'InvoiceLineId',
            'InvoiceLineId',
            'InvoiceLineId');
    }

    public function invoiceLineSession()
    {
        return $this->hasOne(InvoiceLineSession::class, 'InvoiceLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function invoiceLineTime()
    {
        return $this->hasOneThrough(InvoiceLineTime::class,
            InvoiceLineExtended::class,
            'InvoiceLineId',
            'InvoiceLineId',
            'InvoiceLineId',
            'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoiceLineTimeFixed()
    {
        return $this->hasOne(InvoiceLineTimeFixed::class, 'InvoiceLineId', 'InvoiceLineId');
    }
}
