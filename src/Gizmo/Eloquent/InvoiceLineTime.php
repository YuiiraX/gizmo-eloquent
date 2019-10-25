<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\InvoiceLineTime
 *
 * @property int                                                                                $InvoiceLineId
 * @property int                                                                                $OrderLineId
 * @property int                                                                                $ProductTimeId
 * @property bool                                                                               $IsDepleted
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineExtended                                         $invoiceLineExtended
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOLTime                                               $productOLTime
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductTime                                                 $productTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UsageUserSession[] $usageUserSessions
 * @property-read int|null                                                                      $usage_user_sessions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTime whereInvoiceLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTime whereIsDepleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTime whereOrderLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\InvoiceLineTime whereProductTimeId($value)
 * @mixin \Eloquent
 */
class InvoiceLineTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InvoiceLineTime';

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
                           'ProductTimeId',
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
    public function invoiceLineExtended()
    {
        return $this->belongsTo(InvoiceLineExtended::class, 'InvoiceLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productOLTime()
    {
        return $this->belongsTo(ProductOLTime::class, 'OrderLineId', 'ProductOLId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productTime()
    {
        return $this->belongsTo(ProductTime::class, 'ProductTimeId', 'ProductId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function usageUserSessions()
    {
        return $this->hasManyThrough(UsageUserSession::class,
                                     UsageTime::class,
                                     'InvoiceLineId',
                                     'UsageId',
                                     'InvoiceLineId',
                                     'UsageId');
    }
}
