<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\UserGroup
 *
 * @property int                                                                                        $UserGroupId
 * @property string                                                                                     $Name
 * @property string|null                                                                                $Description
 * @property int|null                                                                                   $AppGroupId
 * @property int|null                                                                                   $SecurityProfileId
 * @property int|null                                                                                   $BillProfileId
 * @property int                                                                                        $RequiredUserInfo
 * @property int                                                                                        $Overrides
 * @property int                                                                                        $Options
 * @property int                                                                                        $CreditLimitOptions
 * @property bool                                                                                       $IsDefault
 * @property float                                                                                      $CreditLimit
 * @property bool                                                                                       $IsNegativeBalanceAllowed
 * @property int|null                                                                                   $ModifiedById
 * @property string|null                                                                                $ModifiedTime
 * @property int|null                                                                                   $CreatedById
 * @property string                                                                                     $CreatedTime
 * @property int                                                                                        $PointsAwardOptions
 * @property float                                                                                      $PointsMoneyRatio
 * @property int                                                                                        $PointsTimeRatio
 * @property int|null                                                                                   $Points
 * @property bool                                                                                       $IsAgeRatingEnabled
 * @property int                                                                                        $BillingOptions
 * @property int                                                                                        $WaitingLinePriority
 * @property bool                                                                                       $IsWaitingLinePriorityEnabled
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BundleProductUserPrice[]   $_bundlesProducts
 * @property-read int|null                                                                              $_bundles_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserGroupHostDisallowed[]  $_disallowedHostGroups
 * @property-read int|null                                                                              $_disallowed_host_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductUserDisallowed[]    $_disallowedProducts
 * @property-read int|null                                                                              $_disallowed_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroupUserBillProfile[] $_hostGroupBillProfiles
 * @property-read int|null                                                                              $_host_group_bill_profiles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductBundleUserPrice[]   $_productBundles
 * @property-read int|null                                                                              $_product_bundles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductUserPrice[]         $_products
 * @property-read int|null                                                                              $_products_count
 * @property-read \Yuiirax\Gizmo\Eloquent\AppGroup|null                                                       $appGroup
 * @property-read \Yuiirax\Gizmo\Eloquent\BillProfile|null                                                    $billProfile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BundleProduct[]            $bundlesProducts
 * @property-read int|null                                                                              $bundles_products_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                                   $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroup[]                $defaultByHostGroups
 * @property-read int|null                                                                              $default_by_host_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroup[]                $disallowedHostGroups
 * @property-read int|null                                                                              $disallowed_host_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductBase[]              $disallowedProducts
 * @property-read int|null                                                                              $disallowed_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroup[]                $hostGroupBillProfiles
 * @property-read int|null                                                                              $host_group_bill_profiles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserMember[]               $members
 * @property-read int|null                                                                              $members_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                                   $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductBundle[]            $productBundles
 * @property-read int|null                                                                              $product_bundles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Product[]                  $products
 * @property-read int|null                                                                              $products_count
 * @property-read \Yuiirax\Gizmo\Eloquent\SecurityProfile|null                                                $securityProfile
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereAppGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereBillProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereBillingOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereCreditLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereCreditLimitOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereIsAgeRatingEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereIsNegativeBalanceAllowed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereIsWaitingLinePriorityEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereOverrides($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup wherePointsAwardOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup wherePointsMoneyRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup wherePointsTimeRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereRequiredUserInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereSecurityProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereUserGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGroup whereWaitingLinePriority($value)
 * @mixin \Eloquent
 */
class UserGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserGroup';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UserGroupId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'Description',
                           'AppGroupId',
                           'SecurityProfileId',
                           'BillProfileId',
                           'RequiredUserInfo',
                           'Overrides',
                           'Options',
                           'CreditLimitOptions',
                           'IsDefault',
                           'CreditLimit',
                           'IsNegativeBalanceAllowed',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'PointsAwardOptions',
                           'PointsMoneyRatio',
                           'PointsTimeRatio',
                           'Points',
                           'IsAgeRatingEnabled',
                           'BillingOptions',
                           'WaitingLinePriority',
                           'IsWaitingLinePriorityEnabled'];

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
    public function appGroup()
    {
        return $this->belongsTo(AppGroup::class, 'AppGroupId', 'AppGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function billProfile()
    {
        return $this->belongsTo(BillProfile::class, 'BillProfileId', 'BillProfileId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function securityProfile()
    {
        return $this->belongsTo(SecurityProfile::class, 'SecurityProfileId', 'SecurityProfileId');
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
    public function defaultByHostGroups()
    {
        return $this->hasMany(HostGroup::class, 'DefaultGuestGroupId', 'UserGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany(UserMember::class, 'UserGroupId', 'UserGroupId');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bundlesProducts()
    {
        return $this->belongsToMany(BundleProduct::class,
                                    'BundleProductUserPrice',
                                    'UserGroupId',
                                    'BundleProductId')
                    ->as('options')
                    ->using(BundleProductUserPrice::class)
                    ->withPivot(['Price',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function hostGroupBillProfiles()
    {
        return $this->belongsToMany(HostGroup::class,
                                    'HostGroupUserBillProfile',
                                    'UserGroupId',
                                    'HostGroupId')
                    ->as('options')
                    ->using(HostGroupUserBillProfile::class)
                    ->withPivot(['BillProfileId',
                                 'IsEnabled']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productBundles()
    {
        return $this->belongsToMany(ProductBundle::class,
                                    'ProductBundleUserPrice',
                                    'UserGroupId',
                                    'ProductBundleId')
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function disallowedProducts()
    {
        return $this->belongsToMany(ProductBase::class,
                                    'ProductUserDisallowed',
                                    'UserGroupId',
                                    'ProductId')
                    ->as('options')
                    ->using(ProductUserDisallowed::class)
                    ->withPivot(['IsDisallowed',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class,
                                    'ProductUserPrice',
                                    'UserGroupId',
                                    'ProductId')
                    ->as('options')
                    ->using(ProductUserPrice::class)
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function disallowedHostGroups()
    {
        return $this->belongsToMany(HostGroup::class,
                                    'UserGroupHostDisallowed',
                                    'UserGroupId',
                                    'HostGroupId')
                    ->as('options')
                    ->using(UserGroupHostDisallowed::class)
                    ->withPivot(['IsDisallowed',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _bundlesProducts()
    {
        return $this->hasMany(BundleProductUserPrice::class, 'UserGroupId', 'UserGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _hostGroupBillProfiles()
    {
        return $this->hasMany(HostGroupUserBillProfile::class, 'UserGroupId', 'UserGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _productBundles()
    {
        return $this->hasMany(ProductBundleUserPrice::class, 'UserGroupId', 'UserGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _disallowedProducts()
    {
        return $this->hasMany(ProductUserDisallowed::class, 'UserGroupId', 'UserGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _products()
    {
        return $this->hasMany(ProductUserPrice::class, 'UserGroupId', 'UserGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _disallowedHostGroups()
    {
        return $this->hasMany(UserGroupHostDisallowed::class, 'UserGroupId', 'UserGroupId');
    }
}
