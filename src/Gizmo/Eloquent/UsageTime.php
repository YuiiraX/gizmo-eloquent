<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\UsageTime
 *
 * @property int                                     $UsageId
 * @property int                                     $InvoiceLineId
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineTime  $invoiceLineTime
 * @property-read \YuiiraX\Gizmo\Eloquent\Usage            $usage
 * @property-read \YuiiraX\Gizmo\Eloquent\UsageUserSession $usageUserSession
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageTime whereInvoiceLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UsageTime whereUsageId($value)
 * @mixin \Eloquent
 */
class UsageTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UsageTime';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UsageId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['InvoiceLineId'];

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
    public function usage()
    {
        return $this->belongsTo(Usage::class, 'UsageId', 'UsageId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usageUserSession()
    {
        return $this->belongsTo(UsageUserSession::class, 'UsageId', 'UsageId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoiceLineTime()
    {
        return $this->belongsTo(InvoiceLineTime::class, 'InvoiceLineId', 'InvoiceLineId');
    }
}
