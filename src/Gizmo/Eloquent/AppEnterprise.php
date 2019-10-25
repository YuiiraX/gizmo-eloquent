<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\AppEnterprise
 *
 * @property int                                                                   $AppEnterpriseId
 * @property string                                                                $Name
 * @property string                                                                $Guid
 * @property int|null                                                              $ModifiedById
 * @property string|null                                                           $ModifiedTime
 * @property int|null                                                              $CreatedById
 * @property string                                                                $CreatedTime
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                              $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\App[] $developed
 * @property-read int|null                                                         $developed_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                              $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\App[] $published
 * @property-read int|null                                                         $published_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise whereAppEnterpriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppEnterprise whereName($value)
 * @mixin \Eloquent
 */
class AppEnterprise extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AppEnterprise';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AppEnterpriseId';

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

    // Ownership

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function published()
    {
        return $this->hasMany(App::class, 'PublisherId', 'AppEnterpriseId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function developed()
    {
        return $this->hasMany(App::class, 'DeveloperId', 'AppEnterpriseId');
    }
}
