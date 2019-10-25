<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\VoidInvoice
 *
 * @property int                                    $VoidId
 * @property int                                    $InvoiceId
 * @property-read \YuiiraX\Gizmo\Eloquent\Invoice         $invoice
 * @property-read \YuiiraX\Gizmo\Eloquent\VoidTransaction $transaction
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VoidInvoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VoidInvoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VoidInvoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VoidInvoice whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VoidInvoice whereVoidId($value)
 * @mixin \Eloquent
 */
class VoidInvoice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'VoidInvoice';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'VoidId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['InvoiceId'];

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
    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'InvoiceId', 'InvoiceId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo(VoidTransaction::class, 'VoidId', 'VoidId');
    }
}
