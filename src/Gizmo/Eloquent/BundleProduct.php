<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * YuiiraX\Gizmo\Eloquent\BundleProduct
 *
 * @property int                                                                                      $BundleProductId
 * @property int                                                                                      $ProductBundleId
 * @property int                                                                                      $ProductId
 * @property float                                                                                    $Quantity
 * @property float                                                                                    $Price
 * @property int                                                                                      $DisplayOrder
 * @property int                                                                                      $Options
 * @property int|null                                                                                 $ModifiedById
 * @property string|null                                                                              $ModifiedTime
 * @property int|null                                                                                 $CreatedById
 * @property string                                                                                   $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\BundleProductUserPrice[] $_userGroups
 * @property-read int|null                                                                            $_user_groups_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                                 $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                                 $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBase                                                       $productBase
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductBundle                                                     $productBundle
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGroup[]              $userGroups
 * @property-read int|null                                                                            $user_groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereBundleProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereProductBundleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BundleProduct whereQuantity($value)
 * @mixin \Eloquent
 */
class BundleProduct extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BundleProduct';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'BundleProductId';

    /**
     * @var array
     */
    protected $fillable = ['ProductBundleId',
                           'ProductId',
                           'Quantity',
                           'Price',
                           'DisplayOrder',
                           'Options',
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
    public function productBundle()
    {
        return $this->belongsTo(ProductBundle::class, 'ProductBundleId', 'ProductId');
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userGroups()
    {
        return $this->belongsToMany(UserGroup::class,
                                    'BundleProductUserPrice',
                                    'BundleProductId',
                                    'UserGroupId')
                    ->as('price')
                    ->using(BundleProductUserPrice::class)
                    ->withPivot(['Price',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _userGroups()
    {
        return $this->hasMany(BundleProductUserPrice::class, 'BundleProductId', 'BundleProductId');
    }
}
