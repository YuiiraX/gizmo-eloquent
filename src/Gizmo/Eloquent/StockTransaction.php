<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\StockTransaction
 *
 * @property int                                      $StockTransactionId
 * @property int                                      $ProductId
 * @property int|null                                 $SourceProductId
 * @property int                                      $Type
 * @property float                                    $Amount
 * @property float                                    $OnHand
 * @property float|null                               $SourceProductAmount
 * @property float|null                               $SourceProductOnHand
 * @property bool                                     $IsVoided
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property int|null                                 $ShiftId
 * @property int|null                                 $RegisterId
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductBase       $productBase
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductBase|null  $sourceProductBase
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereIsVoided($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereOnHand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereSourceProductAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereSourceProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereSourceProductOnHand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereStockTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\StockTransaction whereType($value)
 * @mixin \Eloquent
 */
class StockTransaction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'StockTransaction';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'StockTransactionId';

    /**
     * @var array
     */
    protected $fillable = ['ProductId',
                           'SourceProductId',
                           'Type',
                           'Amount',
                           'OnHand',
                           'SourceProductAmount',
                           'SourceProductOnHand',
                           'IsVoided',
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
    public function productBase()
    {
        return $this->belongsTo(ProductBase::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sourceProductBase()
    {
        return $this->belongsTo(ProductBase::class, 'SourceProductId', 'ProductId');
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
    public function invoiceLine()
    {
        return $this->hasOneThrough(InvoiceLine::class,
                                    InvoiceLineExtended::class,
                                    'StockTransactionId',
                                    'InvoiceLineId',
                                    'StockTransactionId',
                                    'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function returnLine()
    {
        return $this->hasOneThrough(InvoiceLine::class,
                                    InvoiceLineExtended::class,
                                    'StockReturnTransactionId',
                                    'InvoiceLineId',
                                    'StockTransactionId',
                                    'InvoiceLineId');
    }
}
