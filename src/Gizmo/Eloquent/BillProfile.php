<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\BillProfile
 *
 * @property int                                                                                        $BillProfileId
 * @property string                                                                                     $Name
 * @property int|null                                                                                   $ModifiedById
 * @property string|null                                                                                $ModifiedTime
 * @property int|null                                                                                   $CreatedById
 * @property string                                                                                     $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroupUserBillProfile[] $_userHostGroup
 * @property-read int|null                                                                              $_user_host_group_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                                   $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserGroup[]                $defaultByUserGroups
 * @property-read int|null                                                                              $default_by_user_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroup[]                $hostGroups
 * @property-read int|null                                                                              $host_groups_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                                   $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BillRate[]                 $rates
 * @property-read int|null                                                                              $rates_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserGroup[]                $userGroups
 * @property-read int|null                                                                              $user_groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile whereBillProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\BillProfile whereName($value)
 * @mixin \Eloquent
 */
class BillProfile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BillProfile';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'BillProfileId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
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
    public function rates()
    {
        return $this->hasMany(BillRate::class, 'BillProfileId', 'BillProfileId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function defaultByUserGroups()
    {
        return $this->hasMany(UserGroup::class, 'BillProfileId', 'BillProfileId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userGroups()
    {
        return $this->belongsToMany(UserGroup::class,
                                    'HostGroupUserBillProfile',
                                    'BillProfileId',
                                    'UserGroupId')
                    ->as('options')
                    ->using(HostGroupUserBillProfile::class)
                    ->withPivot(['HostGroupId',
                                 'IsEnabled']);
    }

    public function hostGroups()
    {
        return $this->belongsToMany(HostGroup::class,
                                    'HostGroupUserBillProfile',
                                    'BillProfileId',
                                    'HostGroupId')
                    ->as('options')
                    ->using(HostGroupUserBillProfile::class)
                    ->withPivot(['UserGroupId',
                                 'IsEnabled']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _userHostGroup()
    {
        return $this->hasMany(HostGroupUserBillProfile::class, 'BillProfileId', 'BillProfileId');
    }
}
