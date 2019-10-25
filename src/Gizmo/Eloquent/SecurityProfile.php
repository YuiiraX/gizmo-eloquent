<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\SecurityProfile
 *
 * @property int                                                                                          $SecurityProfileId
 * @property string                                                                                       $Name
 * @property int                                                                                          $DisabledDrives
 * @property int|null                                                                                     $ModifiedById
 * @property string|null                                                                                  $ModifiedTime
 * @property int|null                                                                                     $CreatedById
 * @property string                                                                                       $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                                     $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroup[]                  $hostGroups
 * @property-read int|null                                                                                $host_groups_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                                     $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy[]      $policies
 * @property-read int|null                                                                                $policies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\SecurityProfileRestriction[] $restrictions
 * @property-read int|null                                                                                $restrictions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserGroup[]                  $userGroups
 * @property-read int|null                                                                                $user_groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile whereDisabledDrives($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfile whereSecurityProfileId($value)
 * @mixin \Eloquent
 */
class SecurityProfile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'SecurityProfile';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SecurityProfileId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'DisabledDrives',
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
        return $this->hasMany(HostGroup::class, 'SecurityProfileId', 'SecurityProfileId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function policies()
    {
        return $this->hasMany(SecurityProfilePolicy::class, 'SecurityProfileId', 'SecurityProfileId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restrictions()
    {
        return $this->hasMany(SecurityProfileRestriction::class, 'SecurityProfileId', 'SecurityProfileId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userGroups()
    {
        return $this->hasMany(UserGroup::class, 'SecurityProfileId', 'SecurityProfileId');
    }
}
