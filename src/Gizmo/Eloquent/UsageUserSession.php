<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\UsageUserSession
 *
 * @property int                                $UsageId
 * @property int                                $UserSessionId
 * @property-read \Yuiirax\Gizmo\Eloquent\Usage       $usage
 * @property-read \Yuiirax\Gizmo\Eloquent\UsageRate   $usageRate
 * @property-read \Yuiirax\Gizmo\Eloquent\UserSession $userSession
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageUserSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageUserSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageUserSession query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageUserSession whereUsageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UsageUserSession whereUserSessionId($value)
 * @mixin \Eloquent
 */
class UsageUserSession extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UsageUserSession';

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
    protected $fillable = ['UserSessionId'];

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
    public function userSession()
    {
        return $this->belongsTo(UserSession::class, 'UserSessionId', 'UserSessionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usageRate()
    {
        return $this->hasOne(UsageRate::class, 'UsageId', 'UsageId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function invoiceLineTime()
    {
        return $this->hasOneThrough(InvoiceLineTime::class,
                                    UsageTime::class,
                                    'UsageId',
                                    'InvoiceLineId',
                                    'UsageId',
                                    'InvoiceLineId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function invoiceLineTimeFixed()
    {
        return $this->hasOneThrough(InvoiceLineTimeFixed::class,
                                    UsageTimeFixed::class,
                                    'UsageId',
                                    'InvoiceLineId',
                                    'UsageId',
                                    'InvoiceLineId');
    }


}
