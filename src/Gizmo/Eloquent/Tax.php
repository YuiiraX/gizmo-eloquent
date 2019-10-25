<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\Tax
 *
 * @property int                                                                          $TaxId
 * @property string                                                                       $Name
 * @property float                                                                        $Value
 * @property int                                                                          $UseOrder
 * @property int|null                                                                     $ModifiedById
 * @property string|null                                                                  $ModifiedTime
 * @property int|null                                                                     $CreatedById
 * @property string                                                                       $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductTax[] $_products
 * @property-read int|null                                                                $_products_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                     $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                     $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Product[]    $products
 * @property-read int|null                                                                $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax whereTaxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax whereUseOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Tax whereValue($value)
 * @mixin \Eloquent
 */
class Tax extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Tax';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'TaxId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'Value',
                           'UseOrder',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class,
                                    'ProductTax',
                                    'TaxId',
                                    'ProductId')
                    ->as('options')
                    ->using(ProductTax::class)
                    ->withPivot(['UseOrder',
                                 'IsEnabled',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _products()
    {
        return $this->hasMany(ProductTax::class, 'TaxId', 'TaxId');
    }
}
