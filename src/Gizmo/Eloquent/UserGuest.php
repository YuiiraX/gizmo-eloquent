<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\UserGuest
 *
 * @property int                               $UserId
 * @property bool                              $IsJoined
 * @property bool                              $IsReserved
 * @property int|null                          $ReservedHostId
 * @property int|null                          $ReservedSlot
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember $customer
 * @property-read \Yuiirax\Gizmo\Eloquent\Host|null  $reservedHost
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGuest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGuest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGuest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGuest whereIsJoined($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGuest whereIsReserved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGuest whereReservedHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGuest whereReservedSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserGuest whereUserId($value)
 * @mixin \Eloquent
 */
class UserGuest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserGuest';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UserId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['IsJoined',
                           'IsReserved',
                           'ReservedHostId',
                           'ReservedSlot'];

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
    public function reservedHost()
    {
        return $this->belongsTo(Host::class, 'ReservedHostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(UserMember::class, 'UserId', 'UserId');
    }
}
