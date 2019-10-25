<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\InvoiceLineSession
 *
 * @property int                                     $InvoiceLineId
 * @property int                                     $OrderLineId
 * @property int                                     $UsageSessionId
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLine      $invoiceLine
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLSession $productOLSession
 * @property-read \YuiiraX\Gizmo\Eloquent\UsageSession     $usageSession
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineSession query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineSession whereInvoiceLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineSession whereOrderLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineSession whereUsageSessionId($value)
 * @mixin \Eloquent
 */
class InvoiceLineSession extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InvoiceLineSession';

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
                           'UsageSessionId'];

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
    public function productOLSession()
    {
        return $this->belongsTo(ProductOLSession::class, 'OrderLineId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usageSession()
    {
        return $this->belongsTo(UsageSession::class, 'UsageSessionId', 'UsageSessionId');
    }
}
