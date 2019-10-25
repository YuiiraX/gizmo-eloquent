<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\InvoiceLineTimeFixed
 *
 * @property int                                                                                $InvoiceLineId
 * @property int                                                                                $OrderLineId
 * @property bool                                                                               $IsDepleted
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLine                                                 $invoiceLine
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLTimeFixed                                          $productOLTimeFixed
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UsageUserSession[] $usage
 * @property-read int|null                                                                      $usage_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTimeFixed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTimeFixed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTimeFixed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTimeFixed whereInvoiceLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTimeFixed whereIsDepleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTimeFixed whereOrderLineId($value)
 * @mixin \Eloquent
 */
class InvoiceLineTimeFixed extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InvoiceLineTimeFixed';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'InvoiceLineId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['OrderLineId',
                           'IsDepleted'];

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
    public function invoiceLine()
    {
        return $this->belongsTo(InvoiceLine::class, 'InvoiceLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productOLTimeFixed()
    {
        return $this->belongsTo(ProductOLTimeFixed::class, 'OrderLineId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function usage()
    {
        return $this->hasManyThrough(UsageUserSession::class,
                                     UsageTime::class,
                                     'InvoiceLineId',
                                     'UsageId',
                                     'InvoiceLineId',
                                     'UsageId');
    }
}
