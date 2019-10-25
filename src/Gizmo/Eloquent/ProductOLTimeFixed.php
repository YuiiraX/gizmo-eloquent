<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\ProductOLTimeFixed
 *
 * @property int                                         $ProductOLId
 * @property-read \Yuiirax\Gizmo\Eloquent\InvoiceLineTimeFixed $invoiceLineTimeFixed
 * @property-read \Yuiirax\Gizmo\Eloquent\ProductOL            $productOL
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLTimeFixed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLTimeFixed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLTimeFixed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ProductOLTimeFixed whereProductOLId($value)
 * @mixin \Eloquent
 */
class ProductOLTimeFixed extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductOLTimeFixed';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductOLId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [];

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
    public function productOL()
    {
        return $this->belongsTo(ProductOL::class, 'ProductOLId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoiceLineTimeFixed()
    {
        return $this->hasOne(InvoiceLineTimeFixed::class, 'OrderLineId', 'ProductOLId');
    }
}
