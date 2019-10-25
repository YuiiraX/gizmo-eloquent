<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\AppGroup
 *
 * @property int                                                                           $AppGroupId
 * @property string                                                                        $Name
 * @property string                                                                        $Guid
 * @property int|null                                                                      $ModifiedById
 * @property string|null                                                                   $ModifiedTime
 * @property int|null                                                                      $CreatedById
 * @property string                                                                        $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppGroupApp[] $_apps
 * @property-read int|null                                                                 $_apps_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\App[]         $apps
 * @property-read int|null                                                                 $apps_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                      $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostGroup[]   $hostGroups
 * @property-read int|null                                                                 $host_groups_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                      $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductTime[] $productTimes
 * @property-read int|null                                                                 $product_times_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGroup[]   $userGroups
 * @property-read int|null                                                                 $user_groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup whereAppGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppGroup whereName($value)
 * @mixin \Eloquent
 */
class AppGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AppGroup';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AppGroupId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
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
    public function hostGroups()
    {
        return $this->hasMany(HostGroup::class, 'AppGroupId', 'AppGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productTimes()
    {
        return $this->hasMany(ProductTime::class, 'AppGroupId', 'AppGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userGroups()
    {
        return $this->hasMany(UserGroup::class, 'AppGroupId', 'AppGroupId');
    }

    public function apps()
    {
        return $this->belongsToMany(App::class,
                                    'AppGroupApp',
                                    'AppGroupId',
                                    'UserId')
                    ->as('AppId')
                    ->using(AppGroupApp::class);
    }


    // Pivot

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _apps()
    {
        return $this->hasMany(AppGroupApp::class, 'AppGroupId', 'AppGroupId');
    }
}
