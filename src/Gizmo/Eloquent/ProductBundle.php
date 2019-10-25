<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductBundle
 *
 * @property int                                                                                      $ProductId
 * @property int                                                                                      $BundleStockOptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\BundleProduct[]          $_bundleProducts
 * @property-read int|null                                                                            $_bundle_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductBundleUserPrice[] $_pricedUserGroup
 * @property-read int|null                                                                            $_priced_user_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductBase[]            $bundleProducts
 * @property-read int|null                                                                            $bundle_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGroup[]              $pricedUserGroup
 * @property-read int|null                                                                            $priced_user_group_count
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBaseExtended                                               $productBaseExtended
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBundle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBundle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBundle query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBundle whereBundleStockOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductBundle whereProductId($value)
 * @mixin \Eloquent
 */
class ProductBundle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductBundle';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['BundleStockOptions'];

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
    public function productBaseExtended()
    {
        return $this->belongsTo(ProductBaseExtended::class, 'ProductId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bundleProducts()
    {
        return $this->belongsToMany(ProductBase::class,
                                    'BundleProduct',
                                    'ProductBundleId',
                                    'ProductId')
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
    public function pricedUserGroup()
    {
        return $this->belongsToMany(UserGroup::class,
                                    'ProductBundleUserPrice',
                                    'ProductBundleId',
                                    'ProductId')
                    ->as('options')
                    ->using(ProductBundleUserPrice::class)
                    ->withPivot(['Price',
                                 'PointsPrice',
                                 'PurchaseOptions',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _bundleProducts()
    {
        return $this->hasMany(BundleProduct::class, 'ProductBundleId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _pricedUserGroup()
    {
        return $this->hasMany(ProductBundleUserPrice::class, 'ProductBundleId', 'ProductId');
    }
}
