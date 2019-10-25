<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout
 *
 * @property int                                      $HostLayoutGroupLayoutId
 * @property int                                      $HostLayoutGroupId
 * @property int                                      $HostId
 * @property int                                      $X
 * @property int                                      $Y
 * @property int                                      $Height
 * @property int                                      $Width
 * @property bool                                     $IsHidden
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\Host              $host
 * @property-read \Yuiirax\Gizmo\Eloquent\HostLayoutGroup   $hostLayoutGroup
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereHostLayoutGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereHostLayoutGroupLayoutId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereIsHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout whereY($value)
 * @mixin \Eloquent
 */
class HostLayoutGroupLayout extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'HostLayoutGroupLayout';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HostLayoutGroupLayoutId';

    /**
     * @var array
     */
    protected $fillable = ['HostLayoutGroupId',
                           'HostId',
                           'X',
                           'Y',
                           'Height',
                           'Width',
                           'IsHidden',
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
    public function host()
    {
        return $this->belongsTo(Host::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hostLayoutGroup()
    {
        return $this->belongsTo(HostLayoutGroup::class, 'HostLayoutGroupId', 'HostLayoutGroupId');
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
}
