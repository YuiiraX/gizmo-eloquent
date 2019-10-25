<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Yuiirax\Gizmo\Eloquent\ProductTax
 *
 * @property int                                      $ProductTaxId
 * @property int                                      $ProductId
 * @property int                                      $TaxId
 * @property int                                      $UseOrder
 * @property bool                                     $IsEnabled
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductBase       $productBase
 * @property-read \Yuiirax\Gizmo\Eloquent\Tax               $tax
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereProductTaxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereTaxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductTax whereUseOrder($value)
 * @mixin \Eloquent
 */
class ProductTax extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductTax';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductTaxId';

    /**
     * @var array
     */
    protected $fillable = ['ProductId',
                           'TaxId',
                           'UseOrder',
                           'IsEnabled',
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
    public function productBase()
    {
        return $this->belongsTo(ProductBase::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tax()
    {
        return $this->belongsTo(Tax::class, 'TaxId', 'TaxId');
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
