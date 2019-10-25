<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\HostGroup
 *
 * @property int                                                                                         $HostGroupId
 * @property string                                                                                      $Name
 * @property int|null                                                                                    $AppGroupId
 * @property int|null                                                                                    $SecurityProfileId
 * @property string|null                                                                                 $SkinName
 * @property int                                                                                         $Options
 * @property int|null                                                                                    $DefaultGuestGroupId
 * @property int|null                                                                                    $ModifiedById
 * @property string|null                                                                                 $ModifiedTime
 * @property int|null                                                                                    $CreatedById
 * @property string                                                                                      $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductTimeHostDisallowed[] $_disallowedProductTimes
 * @property-read int|null                                                                               $_disallowed_product_times_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGroupHostDisallowed[]   $_disallowedUserGroups
 * @property-read int|null                                                                               $_disallowed_user_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile[]  $_userGroupBillProfiles
 * @property-read int|null                                                                               $_user_group_bill_profiles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLineEntry[] $_waitingUsers
 * @property-read int|null                                                                               $_waiting_users_count
 * @property-read \YuiiraX\Gizmo\Eloquent\AppGroup|null                                                        $appGroup
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                                    $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserGroup|null                                                       $defaultGuestGroup
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductTime[]               $disallowedProductTimes
 * @property-read int|null                                                                               $disallowed_product_times_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGroup[]                 $disallowedUserGroups
 * @property-read int|null                                                                               $disallowed_user_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Host[]                      $hosts
 * @property-read int|null                                                                               $hosts_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                                    $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\SecurityProfile|null                                                 $securityProfile
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGroup[]                 $userGroupBillProfiles
 * @property-read int|null                                                                               $user_group_bill_profiles_count
 * @property-read \YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine                                                 $waitingLine
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserMember[]                $waitingUsers
 * @property-read int|null                                                                               $waiting_users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereAppGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereDefaultGuestGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereHostGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereSecurityProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroup whereSkinName($value)
 * @mixin \Eloquent
 */
class HostGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'HostGroup';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HostGroupId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'AppGroupId',
                           'SecurityProfileId',
                           'SkinName',
                           'Options',
                           'DefaultGuestGroupId',
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
    public function appGroup()
    {
        return $this->belongsTo(AppGroup::class, 'AppGroupId', 'AppGroupId');
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
    public function defaultGuestGroup()
    {
        return $this->belongsTo(UserGroup::class, 'DefaultGuestGroupId', 'UserGroupId');
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
    public function waitingLine()
    {
        return $this->hasOne(HostGroupWaitingLine::class, 'HosGroupId', 'HostGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hosts()
    {
        return $this->hasMany(Host::class, 'HostGroupId', 'HostGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userGroupBillProfiles()
    {
        return $this->belongsToMany(UserGroup::class,
                                    'HostGroupUserBillProfile',
                                    'HostGroupId',
                                    'UserGroupId')
                    ->as('hostGroupBillProfile')
                    ->using(HostGroupUserBillProfile::class)
                    ->withPivot(['BillProfileId',
                                 'IsEnabled']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function waitingUsers()
    {
        return $this->belongsToMany(UserMember::class,
                                    'HostGroupWaitingLineEntry',
                                    'HostGroupId',
                                    'UserId')
                    ->as('options')
                    ->using(HostGroupWaitingLineEntry::class)
                    ->withPivot(['Position',
                                 'IsManualPosition',
                                 'TimeInLine',
                                 'ReadyTime',
                                 'IsReadyTimedOut',
                                 'State',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function disallowedProductTimes()
    {
        return $this->belongsToMany(ProductTime::class,
                                    'ProductTimeHostDisallowed',
                                    'HostGroupId',
                                    'ProductId')
                    ->as('option')
                    ->using(ProductTimeHostDisallowed::class)
                    ->withPivot(['IsDisallowed',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function disallowedUserGroups()
    {
        return $this->belongsToMany(UserGroup::class,
                                    'UserGroupHostDisallowed',
                                    'HostGroupId',
                                    'UserGroupId')
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
    public function _userGroupBillProfiles()
    {
        return $this->hasMany(HostGroupUserBillProfile::class, 'HostGroupId', 'HostGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _waitingUsers()
    {
        return $this->hasMany(HostGroupWaitingLineEntry::class, 'HostGroupId', 'HostGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _disallowedProductTimes()
    {
        return $this->hasMany(ProductTimeHostDisallowed::class, 'HostGroupId', 'HostGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _disallowedUserGroups()
    {
        return $this->hasMany(UserGroupHostDisallowed::class, 'HostGroupId', 'HostGroupId');
    }
}
