<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\AppCategory
 *
 * @property int                                                                           $AppCategoryId
 * @property int|null                                                                      $ParentId
 * @property string                                                                        $Name
 * @property string                                                                        $Guid
 * @property int|null                                                                      $ModifiedById
 * @property string|null                                                                   $ModifiedTime
 * @property int|null                                                                      $CreatedById
 * @property string                                                                        $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\App[]         $apps
 * @property-read int|null                                                                 $apps_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppCategory[] $children
 * @property-read int|null                                                                 $children_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                      $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                      $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\AppCategory|null                                       $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory whereAppCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppCategory whereParentId($value)
 * @mixin \Eloquent
 */
class AppCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AppCategory';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AppCategoryId';

    /**
     * @var array
     */
    protected $fillable = ['ParentId',
                           'Name',
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
    public function parent()
    {
        return $this->belongsTo(AppCategory::class, 'ParentId');
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
    public function apps()
    {
        return $this->hasMany(App::class, 'AppCategoryId', 'AppCategoryId');
    }

    /* SECTION: Related back to belongsTo */

    public function children()
    {
        return $this->hasMany(AppCategory::class, 'ParentId', 'AppCategoryId');
    }
}
