<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductBase
 *
 * @property int                                                                                   $ProductId
 * @property int                                                                                   $ProductGroupId
 * @property string                                                                                $Name
 * @property string|null                                                                           $Description
 * @property float                                                                                 $Price
 * @property float|null                                                                            $Cost
 * @property int|null                                                                              $Points
 * @property int|null                                                                              $PointsPrice
 * @property string|null                                                                           $Barcode
 * @property int                                                                                   $OrderOptions
 * @property int                                                                                   $PurchaseOptions
 * @property int                                                                                   $StockOptions
 * @property float                                                                                 $StockAlert
 * @property int|null                                                                              $StockProductId
 * @property float                                                                                 $StockProductAmount
 * @property bool                                                                                  $IsDeleted
 * @property int                                                                                   $DisplayOrder
 * @property string                                                                                $Guid
 * @property int|null                                                                              $ModifiedById
 * @property string|null                                                                           $ModifiedTime
 * @property int|null                                                                              $CreatedById
 * @property string                                                                                $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductBundle[]       $bundles
 * @property-read int|null                                                                         $bundles_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                              $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGroup[]           $disallowedUserGroups
 * @property-read int|null                                                                         $disallowed_user_groups_count
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBaseExtended                                            $extended
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductImage[]        $images
 * @property-read int|null                                                                         $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoiceLineProduct[]  $invoiceLineProducts
 * @property-read int|null                                                                         $invoice_line_products_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                              $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductPeriod                                                  $period
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGroup[]           $pricedUserGroups
 * @property-read int|null                                                                         $priced_user_groups_count
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductGroup                                                   $productGroup
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductOLProduct[]    $productOLProducts
 * @property-read int|null                                                                         $product_o_l_products_count
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductTime                                                    $productTime
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBase|null                                               $stockProduct
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductBaseExtended[] $stockProducts
 * @property-read int|null                                                                         $stock_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\StockTransaction[]    $stockSources
 * @property-read int|null                                                                         $stock_sources_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\StockTransaction[]    $stocks
 * @property-read int|null                                                                         $stocks_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Tax[]                 $taxes
 * @property-read int|null                                                                         $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereOrderOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase wherePointsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereProductGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase wherePurchaseOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereStockAlert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereStockOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereStockProductAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBase whereStockProductId($value)
 * @mixin \Eloquent
 */
class ProductBase extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductBase';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductId';

    /**
     * @var array
     */
    protected $fillable = ['ProductGroupId',
                           'Name',
                           'Description',
                           'Price',
                           'Cost',
                           'Points',
                           'PointsPrice',
                           'Barcode',
                           'OrderOptions',
                           'PurchaseOptions',
                           'StockOptions',
                           'StockAlert',
                           'StockProductId',
                           'StockProductAmount',
                           'IsDeleted',
                           'DisplayOrder',
                           'Guid',
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
    public function stockProduct()
    {
        return $this->belongsTo(ProductBase::class, 'StockProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productGroup()
    {
        return $this->belongsTo(ProductGroup::class, 'ProductGroupId', 'ProductGroupId');
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function extended()
    {
        return $this->hasOne(ProductBaseExtended::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function period()
    {
        return $this->hasOne(ProductPeriod::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stockProducts()
    {
        return $this->hasMany(ProductBaseExtended::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany(StockTransaction::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stockSources()
    {
        return $this->hasMany(StockTransaction::class, 'SourceProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bundles()
    {
        return $this->belongsToMany(ProductBundle::class,
                                    'BundleProduct',
                                    'ProductId',
                                    'ProductBundleId')
                    ->as('options')
                    ->using(BundleProduct::class)
                    ->withPivot(['Quantity',
                                 'Price',
                                 'DisplayOrder',
                                 'Options',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function taxes()
    {
        return $this->belongsToMany(Tax::class,
                                    'ProductTax',
                                    'ProductId',
                                    'TaxId')
                    ->as('options')
                    ->using(ProductTax::class)
                    ->withPivot(['UseOrder',
                                 'IsEnabled',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    public function disallowedUserGroups()
    {
        return $this->belongsToMany(UserGroup::class,
                                    'ProductUserDisallowed',
                                    'ProductId',
                                    'UserGroupId')
                    ->as('options')
                    ->using(ProductTax::class)
                    ->withPivot(['IsDisallowed',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    public function pricedUserGroups()
    {
        return $this->belongsToMany(UserGroup::class,
                                    'ProductUserPrice',
                                    'ProductId',
                                    'UserGroupId')
                    ->as('options')
                    ->using(ProductTax::class)
                    ->withPivot(['Price',
                                 'PointsPrice',
                                 'PurchaseOptions',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime',
                                 'IsEnabled']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function product()
    {
        return $this->hasOneThrough(Product::class,
                                    ProductBaseExtended::class,
                                    'ProductId',
                                    'ProductId',
                                    'ProductId',
                                    'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productTime()
    {
        return $this->hasOne(ProductTime::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function productBundle()
    {
        return $this->hasOneThrough(ProductBundle::class,
                                    ProductBaseExtended::class,
                                    'ProductId',
                                    'ProductId',
                                    'ProductId',
                                    'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function invoiceLineProducts()
    {
        return $this->hasManyThrough(InvoiceLineProduct::class,
                                     ProductBaseExtended::class,
                                     'ProductId',
                                     'ProductId',
                                     'ProductId',
                                     'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function productOLProducts()
    {
        return $this->hasManyThrough(ProductOLProduct::class,
                                     ProductBaseExtended::class,
                                     'ProductId',
                                     'ProductId',
                                     'ProductId',
                                     'ProductId');
    }
}
