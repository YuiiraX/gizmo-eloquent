<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\App
 *
 * @property int                                                                           $AppId
 * @property string                                                                        $Title
 * @property int|null                                                                      $PublisherId
 * @property int|null                                                                      $DeveloperId
 * @property int                                                                           $AppCategoryId
 * @property string|null                                                                   $Description
 * @property string|null                                                                   $ReleaseDate
 * @property string|null                                                                   $Version
 * @property int                                                                           $Options
 * @property int                                                                           $AgeRating
 * @property string                                                                        $Guid
 * @property int|null                                                                      $ModifiedById
 * @property string|null                                                                   $ModifiedTime
 * @property int|null                                                                      $CreatedById
 * @property string                                                                        $CreatedTime
 * @property int|null                                                                      $DefaultExecutableId
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppGroupApp[] $_appGroups
 * @property-read int|null                                                                 $_app_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppRating[]   $_ratedUsers
 * @property-read int|null                                                                 $_rated_users_count
 * @property-read \Yuiirax\Gizmo\Eloquent\AppCategory                                            $appCategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppGroup[]    $appGroups
 * @property-read int|null                                                                 $app_groups_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                      $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\AppEnterprise|null                                     $developedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExe[]      $exes
 * @property-read int|null                                                                 $exes_count
 * @property-read \Yuiirax\Gizmo\Eloquent\AppImage                                               $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppLink[]     $links
 * @property-read int|null                                                                 $links_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                      $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\AppEnterprise|null                                     $publishedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserMember[]  $ratedUsers
 * @property-read int|null                                                                 $rated_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppRating[]   $ratings
 * @property-read int|null                                                                 $ratings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppStat[]     $stat
 * @property-read int|null                                                                 $stat_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereAgeRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereAppCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereDefaultExecutableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereDeveloperId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App wherePublisherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\App whereVersion($value)
 * @mixin \Eloquent
 */
class App extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'App';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AppId';

    /**
     * @var array
     */
    protected $fillable = ['Title',
                           'PublisherId',
                           'DeveloperId',
                           'AppCategoryId',
                           'Description',
                           'ReleaseDate',
                           'Version',
                           'Options',
                           'AgeRating',
                           'Guid',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'DefaultExecutableId'];

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
    public function appCategory()
    {
        return $this->belongsTo(AppCategory::class, 'AppCategoryId', 'AppCategoryId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function developedBy()
    {
        return $this->belongsTo(AppEnterprise::class, 'DeveloperId', 'AppEnterpriseId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publishedBy()
    {
        return $this->belongsTo(AppEnterprise::class, 'PublisherId', 'AppEnterpriseId');
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
        return $this->hasOne(AppImage::class, 'AppId', 'AppId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exes()
    {
        return $this->hasMany(AppExe::class, 'AppId', 'AppId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function links()
    {
        return $this->hasMany(AppLink::class, 'AppId', 'AppId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stat()
    {
        return $this->hasMany(AppStat::class, 'AppId', 'AppId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ratings()
    {
        return $this->hasMany(AppRating::class, 'AppId', 'AppId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function appGroups()
    {
        return $this->belongsToMany(AppGroup::class,
                                    'AppGroupApp',
                                    'AppId',
                                    'AppGroupId')
                    ->using(AppGroupApp::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ratedUsers()
    {
        return $this->belongsToMany(UserMember::class,
                                    'AppRating',
                                    'AppId',
                                    'UserId')
                    ->as('rating')
                    ->using(AppRating::class)
                    ->withPivot(['Value',
                                 'Date']);
    }

    // Pivots

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _appGroups()
    {
        return $this->hasMany(AppGroupApp::class, 'AppId', 'AppId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _ratedUsers()
    {
        return $this->hasMany(AppRating::class, 'AppId', 'AppId');
    }
}

