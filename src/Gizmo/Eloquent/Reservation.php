<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\Reservation
 *
 * @property int                                                                               $ReservationId
 * @property int|null                                                                          $UserId
 * @property string                                                                            $Pin
 * @property string                                                                            $Date
 * @property int                                                                               $Duration
 * @property string|null                                                                       $ContactPhone
 * @property string|null                                                                       $ContactEmail
 * @property string|null                                                                       $Note
 * @property int                                                                               $Status
 * @property int|null                                                                          $ModifiedById
 * @property string|null                                                                       $ModifiedTime
 * @property int|null                                                                          $CreatedById
 * @property string                                                                            $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ReservationHost[] $_hosts
 * @property-read int|null                                                                     $_hosts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ReservationUser[] $_users
 * @property-read int|null                                                                     $_users_count
 * @property-read \YuiiraX\Gizmo\Eloquent\User|null                                                  $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember|null                                            $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Host[]            $hosts
 * @property-read int|null                                                                     $hosts_count
 * @property-read \YuiiraX\Gizmo\Eloquent\User|null                                                  $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\User[]            $users
 * @property-read int|null                                                                     $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereContactPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Reservation whereUserId($value)
 * @mixin \Eloquent
 */
class Reservation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Reservation';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ReservationId';

    /**
     * @var array
     */
    protected $fillable = ['UserId',
                           'Pin',
                           'Date',
                           'Duration',
                           'ContactPhone',
                           'ContactEmail',
                           'Note',
                           'Status',
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
        return $this->belongsTo(UserMember::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function hosts()
    {
        return $this->belongsToMany(Host::class,
                                    'ReservationHost',
                                    'ReservationId',
                                    'HostId')
                    ->as('options')
                    ->using(ReservationHost::class)
                    ->withPivot(['PreferedUserId',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class,
                                    'ReservationUser',
                                    'ReservationId',
                                    'UserId')
                    ->as('options')
                    ->using(ReservationUser::class)
                    ->withPivot(['ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _hosts()
    {
        return $this->hasMany(ReservationHost::class, 'ReservationId', 'ReservationId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _users()
    {
        return $this->hasMany(ReservationUser::class, 'ReservationId', 'ReservationId');
    }
}
