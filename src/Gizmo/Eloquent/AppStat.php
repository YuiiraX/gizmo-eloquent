<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\AppStat
 *
 * @property int                                 $AppStatId
 * @property int                                 $AppId
 * @property int                                 $AppExeId
 * @property int                                 $HostId
 * @property int                                 $UserId
 * @property float                               $Span
 * @property string                              $StartTime
 * @property-read \YuiiraX\Gizmo\Eloquent\App          $app
 * @property-read \YuiiraX\Gizmo\Eloquent\AppExe       $appExe
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember   $customer
 * @property-read \YuiiraX\Gizmo\Eloquent\HostComputer $hostComputer
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat whereAppExeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat whereAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat whereAppStatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat whereSpan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\AppStat whereUserId($value)
 * @mixin \Eloquent
 */
class AppStat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AppStat';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AppStatId';

    /**
     * @var array
     */
    protected $fillable = ['AppId',
                           'AppExeId',
                           'HostId',
                           'UserId',
                           'Span',
                           'StartTime'];

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
    public function app()
    {
        return $this->belongsTo(App::class, 'AppId', 'AppId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appExe()
    {
        return $this->belongsTo(AppExe::class, 'AppExeId', 'AppExeId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hostComputer()
    {
        return $this->belongsTo(HostComputer::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(UserMember::class, 'UserId', 'UserId');
    }
}
