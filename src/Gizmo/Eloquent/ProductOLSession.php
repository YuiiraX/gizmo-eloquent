<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\ProductOLSession
 *
 * @property int                                       $ProductOLId
 * @property int                                       $UsageSessionId
 * @property-read \YuiiraX\Gizmo\Eloquent\InvoiceLineSession $invoiceLineSession
 * @property-read \YuiiraX\Gizmo\Eloquent\ProductOL          $productOL
 * @property-read \YuiiraX\Gizmo\Eloquent\UsageSession       $usageSession
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLSession query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLSession whereProductOLId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\ProductOLSession whereUsageSessionId($value)
 * @mixin \Eloquent
 */
class ProductOLSession extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ProductOLSession';

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
    protected $fillable = ['UsageSessionId'];

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usageSession()
    {
        return $this->belongsTo(UsageSession::class, 'UsageSessionId', 'UsageSessionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoiceLineSession()
    {
        return $this->hasOne(InvoiceLineSession::class, 'OrderLineId', 'ProductOLId');
    }
}
