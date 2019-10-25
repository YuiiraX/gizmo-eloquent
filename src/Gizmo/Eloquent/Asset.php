<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\Asset
 *
 * @property int                                                                                $AssetId
 * @property int                                                                                $AssetTypeId
 * @property int                                                                                $Number
 * @property string|null                                                                        $Tag
 * @property string|null                                                                        $SmartCardUID
 * @property string|null                                                                        $Barcode
 * @property string|null                                                                        $SerialNumber
 * @property bool                                                                               $IsEnabled
 * @property int|null                                                                           $ModifiedById
 * @property string|null                                                                        $ModifiedTime
 * @property int|null                                                                           $CreatedById
 * @property string                                                                             $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\AssetType                                                   $assetType
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                           $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                           $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AssetTransaction[] $transactions
 * @property-read int|null                                                                      $transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereAssetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereAssetTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereSmartCardUID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Asset whereTag($value)
 * @mixin \Eloquent
 */
class Asset extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Asset';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AssetId';

    /**
     * @var array
     */
    protected $fillable = ['AssetTypeId',
                           'Number',
                           'Tag',
                           'SmartCardUID',
                           'Barcode',
                           'SerialNumber',
                           'IsEnabled',
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
    public function assetType()
    {
        return $this->belongsTo(AssetType::class, 'AssetTypeId', 'AssetTypeId');
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
    public function transactions()
    {
        return $this->hasMany(AssetTransaction::class, 'AssetId', 'AssetId');
    }
}
