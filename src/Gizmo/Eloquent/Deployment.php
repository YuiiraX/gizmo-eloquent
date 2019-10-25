<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\Deployment
 *
 * @property int                                                                                    $DeploymentId
 * @property string                                                                                 $Name
 * @property string                                                                                 $Source
 * @property string                                                                                 $Destination
 * @property string|null                                                                            $ExcludeDirectories
 * @property string|null                                                                            $ExcludeFiles
 * @property string|null                                                                            $IncludeDirectories
 * @property string|null                                                                            $IncludeFiles
 * @property string|null                                                                            $RegistryString
 * @property string                                                                                 $Guid
 * @property int                                                                                    $ComparisonLevel
 * @property int                                                                                    $Options
 * @property int|null                                                                               $ModifiedById
 * @property string|null                                                                            $ModifiedTime
 * @property int|null                                                                               $CreatedById
 * @property string                                                                                 $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppExe[]               $_children
 * @property-read int|null                                                                          $_children_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppExeDeployment[]     $_exes
 * @property-read int|null                                                                          $_exes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppExe[]               $_parents
 * @property-read int|null                                                                          $_parents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppExe[]               $appExes
 * @property-read int|null                                                                          $app_exes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\DeploymentDeployment[] $children
 * @property-read int|null                                                                          $children_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                               $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppExe[]               $defaultsFor
 * @property-read int|null                                                                          $defaults_for_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppExe[]               $exes
 * @property-read int|null                                                                          $exes_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                               $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\DeploymentDeployment[] $parents
 * @property-read int|null                                                                          $parents_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereComparisonLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereDeploymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereExcludeDirectories($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereExcludeFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereIncludeDirectories($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereIncludeFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereRegistryString($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Deployment whereSource($value)
 * @mixin \Eloquent
 */
class Deployment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Deployment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'DeploymentId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'Source',
                           'Destination',
                           'ExcludeDirectories',
                           'ExcludeFiles',
                           'IncludeDirectories',
                           'IncludeFiles',
                           'RegistryString',
                           'Guid',
                           'ComparisonLevel',
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
    public function defaultsFor()
    {
        return $this->hasMany(AppExe::class, 'DefaultDeploymentId', 'DeploymentId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function exes()
    {
        return $this->belongsToMany(AppExe::class,
                                    'AppExeDeployment',
                                    'DeploymentId',
                                    'AppExeId')
                    ->as('options')
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function parents()
    {
        return $this->belongsToMany(DeploymentDeployment::class,
                                    'DeploymentDeployment',
                                    'ParentId',
                                    'ChildId',
                                    'DeploymentId',
                                    'DeploymentId')
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function children()
    {
        return $this->belongsToMany(DeploymentDeployment::class,
                                    'DeploymentDeployment',
                                    'ChildId',
                                    'ParentId',
                                    'DeploymentId',
                                    'DeploymentId')
                    ->as('options')
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function appExes()
    {
        return $this->belongsToMany(AppExe::class,
                                    'AppExeDeployment',
                                    'DeploymentId',
                                    'AppExeId')
                    ->as('options')
                    ->using(AppExeDeployment::class)
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _exes()
    {
        return $this->hasMany(AppExeDeployment::class, 'DeploymentId', 'DeploymentId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _parents()
    {
        return $this->hasMany(AppExe::class, 'ChildId', 'DeploymentId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _children()
    {
        return $this->hasMany(AppExe::class, 'ParentId', 'DeploymentId');
    }
}
