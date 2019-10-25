<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\BillRateStep
 *
 * @property int                             $BillRateStepId
 * @property int                             $BillRateId
 * @property int                             $Minute
 * @property int                             $Action
 * @property float                           $Charge
 * @property float                           $Rate
 * @property int                             $TargetMinute
 * @property-read \YuiiraX\Gizmo\Eloquent\BillRate $billRate
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep whereBillRateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep whereBillRateStepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep whereCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep whereMinute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\BillRateStep whereTargetMinute($value)
 * @mixin \Eloquent
 */
class BillRateStep extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BillRateStep';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'BillRateStepId';

    /**
     * @var array
     */
    protected $fillable = ['BillRateId',
                           'Minute',
                           'Action',
                           'Charge',
                           'Rate',
                           'TargetMinute'];

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
}
