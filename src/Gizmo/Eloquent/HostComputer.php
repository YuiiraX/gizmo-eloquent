<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\HostComputer
 *
 * @property int                                                                       $HostId
 * @property string                                                                    $Hostname
 * @property string                                                                    $MACAddress
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppStat[] $appStats
 * @property-read int|null                                                             $app_stats_count
 * @property-read \Yuiirax\Gizmo\Eloquent\Host                                               $host
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostComputer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostComputer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostComputer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostComputer whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostComputer whereHostname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\HostComputer whereMACAddress($value)
 * @mixin \Eloquent
 */
class HostComputer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'HostComputer';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HostId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Hostname',
                           'MACAddress'];

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
    public function host()
    {
        return $this->belongsTo(Host::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appStats()
    {
        return $this->hasMany(AppStat::class, 'HostId', 'HostId');
    }
}
