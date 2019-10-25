<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\AssetType
 *
 * @property int                                                                                $AssetTypeId
 * @property string                                                                             $Name
 * @property string|null                                                                        $Description
 * @property string|null                                                                        $PartNumber
 * @property int|null                                                                           $ModifiedById
 * @property string|null                                                                        $ModifiedTime
 * @property int|null                                                                           $CreatedById
 * @property string                                                                             $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Asset[]            $assets
 * @property-read int|null                                                                      $assets_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                           $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                           $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AssetTransaction[] $transactions
 * @property-read int|null                                                                      $transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType whereAssetTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AssetType wherePartNumber($value)
 * @mixin \Eloquent
 */
class AssetType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AssetType';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AssetTypeId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'Description',
                           'PartNumber',
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
    public function assets()
    {
        return $this->hasMany(Asset::class, 'AssetTypeId', 'AssetTypeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany(AssetTransaction::class, 'AssetTypeId', 'AssetTypeId');
    }
}
