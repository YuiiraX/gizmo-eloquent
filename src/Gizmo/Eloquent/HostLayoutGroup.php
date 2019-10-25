<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\HostLayoutGroup
 *
 * @property int                                                                                     $HostLayoutGroupId
 * @property string                                                                                  $Name
 * @property int                                                                                     $DisplayOrder
 * @property int|null                                                                                $ModifiedById
 * @property string|null                                                                             $ModifiedTime
 * @property int|null                                                                                $CreatedById
 * @property string                                                                                  $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostLayoutGroupLayout[] $_hosts
 * @property-read int|null                                                                           $_hosts_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                                $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Host[]                  $hosts
 * @property-read int|null                                                                           $hosts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostLayoutGroupImage[]  $images
 * @property-read int|null                                                                           $images_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                                $modifiedBy
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup whereHostLayoutGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup whereName($value)
 * @mixin \Eloquent
 */
class HostLayoutGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'HostLayoutGroup';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HostLayoutGroupId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'DisplayOrder',
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
    public function images()
    {
        return $this->hasMany(HostLayoutGroupImage::class, 'HostLayoutGroupId', 'HostLayoutGroupId');
    }

    public function hosts()
    {
        return $this->belongsToMany(Host::class,
                                    'HostLayoutGroupLayout',
                                    'HostLayoutGroupId',
                                    'HostId')
                    ->as('options')
                    ->using(HostLayoutGroupLayout::class)
                    ->withPivot([
                                    'X',
                                    'Y',
                                    'Height',
                                    'Width',
                                    'IsHidden',
                                    'ModifiedById',
                                    'ModifiedTime',
                                    'CreatedById',
                                    'CreatedTime',
                                ]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _hosts()
    {
        return $this->hasMany(HostLayoutGroupLayout::class, 'HostLayoutGroupId', 'HostLayoutGroupId');
    }
}
