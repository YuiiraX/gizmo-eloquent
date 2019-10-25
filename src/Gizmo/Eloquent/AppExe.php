<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\AppExe
 *
 * @property int                                                                                  $AppExeId
 * @property int                                                                                  $AppId
 * @property string|null                                                                          $Caption
 * @property string|null                                                                          $Description
 * @property string                                                                               $ExecutablePath
 * @property string|null                                                                          $Arguments
 * @property string|null                                                                          $WorkingDirectory
 * @property int                                                                                  $Modes
 * @property int                                                                                  $RunMode
 * @property int|null                                                                             $DefaultDeploymentId
 * @property int                                                                                  $ReservationType
 * @property int                                                                                  $DisplayOrder
 * @property int                                                                                  $Options
 * @property string                                                                               $Guid
 * @property bool                                                                                 $Accessible
 * @property int|null                                                                             $ModifiedById
 * @property string|null                                                                          $ModifiedTime
 * @property int|null                                                                             $CreatedById
 * @property string                                                                               $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeDeployment[]   $_deployment
 * @property-read int|null                                                                        $_deployment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeLicense[]      $_licenses
 * @property-read int|null                                                                        $_licenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExePersonalFile[] $_personalFiles
 * @property-read int|null                                                                        $_personal_files_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeTask[]         $_tasks
 * @property-read int|null                                                                        $_tasks_count
 * @property-read \Yuiirax\Gizmo\Eloquent\App                                                           $app
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeCdImage[]      $cdImages
 * @property-read int|null                                                                        $cd_images_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                             $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\Deployment|null                                               $defaultDeployment
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Deployment[]         $deployments
 * @property-read int|null                                                                        $deployments_count
 * @property-read \Yuiirax\Gizmo\Eloquent\AppExeImage                                                   $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\License[]            $licenses
 * @property-read int|null                                                                        $licenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser[]      $maxUsers
 * @property-read int|null                                                                        $max_users_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                             $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PersonalFile[]       $personalFiles
 * @property-read int|null                                                                        $personal_files_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppStat[]            $stats
 * @property-read int|null                                                                        $stats_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\TaskBase[]           $tasks
 * @property-read int|null                                                                        $tasks_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereAccessible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereAppExeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereArguments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereDefaultDeploymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereExecutablePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereModes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereReservationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereRunMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExe whereWorkingDirectory($value)
 * @mixin \Eloquent
 */
class AppExe extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AppExe';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AppExeId';

    /**
     * @var array
     */
    protected $fillable = ['AppId',
                           'Caption',
                           'Description',
                           'ExecutablePath',
                           'Arguments',
                           'WorkingDirectory',
                           'Modes',
                           'RunMode',
                           'DefaultDeploymentId',
                           'ReservationType',
                           'DisplayOrder',
                           'Options',
                           'Guid',
                           'Accessible',
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
    public function app()
    {
        return $this->belongsTo(App::class, 'AppId', 'AppId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function defaultDeployment()
    {
        return $this->belongsTo(Deployment::class, 'DefaultDeploymentId', 'DeploymentId');
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
    public function image()
    {
        return $this->hasOne(AppExeImage::class, 'AppExeId', 'AppExeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cdImages()
    {
        return $this->hasMany(AppExeCdImage::class, 'AppExeId', 'AppExeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maxUsers()
    {
        return $this->hasMany(AppExeMaxUser::class, 'AppExeId', 'AppExeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stats()
    {
        return $this->hasMany(AppStat::class, 'AppExeId', 'AppExeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function deployments()
    {
        return $this->belongsToMany(Deployment::class,
                                    'AppExeDeployment',
                                    'AppExeId',
                                    'DeploymentId')
                    ->as('options')
                    ->using(AppExeDeployment::class)
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function licenses()
    {
        return $this->belongsToMany(License::class,
                                    'AppExeLicense',
                                    'AppExeId',
                                    'LicenseId')
                    ->as('options')
                    ->using(AppExeLicense::class)
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function personalFiles()
    {
        return $this->belongsToMany(PersonalFile::class,
                                    'AppExePersonalFile',
                                    'AppExeId',
                                    'PersonalFileId')
                    ->as('options')
                    ->using(AppExePersonalFile::class)
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tasks()
    {
        return $this->belongsToMany(TaskBase::class,
                                    'AppExeTask',
                                    'AppExeId',
                                    'TaskBaseId')
                    ->as('options')
                    ->using(AppExeTask::class)
                    ->withPivot(['Activation',
                                 'UseOrder',
                                 'IsEnabled',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    // Pivots

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _deployment()
    {
        return $this->hasMany(AppExeDeployment::class, 'AppExeId', 'AppExeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _licenses()
    {
        return $this->hasMany(AppExeLicense::class, 'AppExeId', 'AppExeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _personalFiles()
    {
        return $this->hasMany(AppExePersonalFile::class, 'AppExeId', 'AppExeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _tasks()
    {
        return $this->hasMany(AppExeTask::class, 'AppExeId', 'AppExeId');
    }

}
