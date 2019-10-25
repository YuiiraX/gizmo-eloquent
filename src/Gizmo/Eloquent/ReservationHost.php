<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Yuiirax\Gizmo\Eloquent\ReservationHost
 *
 * @property int                                    $ReservationHostId
 * @property int                                    $ReservationId
 * @property int                                    $HostId
 * @property int|null                               $PreferedUserId
 * @property int|null                               $ModifiedById
 * @property string|null                            $ModifiedTime
 * @property int|null                               $CreatedById
 * @property string                                 $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null       $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember|null $customer
 * @property-read \Yuiirax\Gizmo\Eloquent\Host            $host
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null       $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\Reservation     $reservation
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost wherePreferedUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost whereReservationHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\ReservationHost whereReservationId($value)
 * @mixin \Eloquent
 */
class ReservationHost extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ReservationHost';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ReservationHostId';

    /**
     * @var array
     */
    protected $fillable = ['ReservationId',
                           'HostId',
                           'PreferedUserId',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime'];

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'ReservationId', 'ReservationId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy()
    {
        return $this->belongsTo(User::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(UserMember::class, 'PreferedUserId', 'UserId');
    }
}
