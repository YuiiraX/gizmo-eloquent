<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\UsageRate
 *
 * @property int                                     $UsageId
 * @property int                                     $BillRateId
 * @property float                                   $Total
 * @property float                                   $Rate
 * @property string                                  $BillProfileStamp
 * @property-read \Yuiirax\Gizmo\Eloquent\BillRate         $billRate
 * @property-read \Yuiirax\Gizmo\Eloquent\UsageUserSession $usageUserSession
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageRate whereBillProfileStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageRate whereBillRateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageRate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageRate whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageRate whereUsageId($value)
 * @mixin \Eloquent
 */
class UsageRate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UsageRate';

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
    protected $fillable = ['BillRateId',
                           'Total',
                           'Rate',
                           'BillProfileStamp'];

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
    public function billRate()
    {
        return $this->belongsTo(BillRate::class, 'BillRateId', 'BillRateId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usageUserSession()
    {
        return $this->belongsTo(UsageUserSession::class, 'UsageId', 'UsageId');
    }
}
