<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\UsageTimeFixed
 *
 * @property int                                         $UsageId
 * @property int                                         $InvoiceLineId
 * @property-read \Yuiirax\Gizmo\Eloquent\InvoiceLineTimeFixed $invoiceLineTimeFixed
 * @property-read \Yuiirax\Gizmo\Eloquent\UsageUserSession     $usageUserSession
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageTimeFixed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageTimeFixed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageTimeFixed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageTimeFixed whereInvoiceLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageTimeFixed whereUsageId($value)
 * @mixin \Eloquent
 */
class UsageTimeFixed extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UsageTimeFixed';

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
    public function invoiceLineTimeFixed()
    {
        return $this->belongsTo(InvoiceLineTimeFixed::class, 'InvoiceLineId', 'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usageUserSession()
    {
        return $this->belongsTo(UsageUserSession::class, 'UsageId', 'UsageId');
    }
}
