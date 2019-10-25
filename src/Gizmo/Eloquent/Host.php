<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\Host
 *
 * @property int                                                                                     $HostId
 * @property int                                                                                     $Number
 * @property string                                                                                  $Name
 * @property int|null                                                                                $HostGroupId
 * @property int                                                                                     $State
 * @property int|null                                                                                $IconId
 * @property bool                                                                                    $IsDeleted
 * @property int|null                                                                                $ModifiedById
 * @property string|null                                                                             $ModifiedTime
 * @property int|null                                                                                $CreatedById
 * @property string                                                                                  $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostLayoutGroupLayout[] $_layoutGroups
 * @property-read int|null                                                                           $_layout_groups_count
 * @property-read \YuiiraX\Gizmo\Eloquent\HostComputer                                                     $computer
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                                $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\HostEndpoint                                                     $endpoint
 * @property-read \YuiiraX\Gizmo\Eloquent\HostGroup|null                                                   $hostGroup
 * @property-read \YuiiraX\Gizmo\Eloquent\Icon|null                                                        $icon
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostLayoutGroup[]       $layoutGroups
 * @property-read int|null                                                                           $layout_groups_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                                $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductOrder[]          $orders
 * @property-read int|null                                                                           $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Reservation[]           $reservations
 * @property-read int|null                                                                           $reservations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserGuest[]             $reservedGuests
 * @property-read int|null                                                                           $reserved_guests_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserSessionChange[]     $userSessionChanges
 * @property-read int|null                                                                           $user_session_changes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserSession[]           $userSessions
 * @property-read int|null                                                                           $user_sessions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereHostGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereIconId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Host whereState($value)
 * @mixin \Eloquent
 */
class Host extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Host';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HostId';

    /**
     * @var array
     */
    protected $fillable = ['Number',
                           'Name',
                           'HostGroupId',
                           'State',
                           'IconId',
                           'IsDeleted',
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
    public function hostGroup()
    {
        return $this->belongsTo(HostGroup::class, 'HostGroupId', 'HostGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function icon()
    {
        return $this->belongsTo(Icon::class, 'IconId', 'IconId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(UserOperator::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy()
    {
        return $this->belongsTo(UserOperator::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computer()
    {
        return $this->hasOne(HostComputer::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function endpoint()
    {
        return $this->hasOne(HostEndpoint::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(ProductOrder::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservedGuests()
    {
        return $this->hasMany(UserGuest::class, 'ReservedHostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userSessions()
    {
        return $this->hasMany(UserSession::class, 'HostId', 'HostId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userSessionChanges()
    {
        return $this->hasMany(UserSessionChange::class, 'HostId', 'HostId');
    }

    public function layoutGroups()
    {
        return $this->belongsToMany(HostLayoutGroup::class,
                                    'HostLayoutGroupLayout',
                                    'HostId',
                                    'HostLayoutGroupId')
                    ->as('position')
                    ->using(HostLayoutGroupLayout::class)
                    ->withPivot(['X',
                                 'Y',
                                 'Height',
                                 'Width',
                                 'IsHidden',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class,
                                    'ReservationHost',
                                    'HostId',
                                    'ReservationId')
                    ->as('options')
                    ->using(ReservationHost::class)
                    ->withPivot([
                                    'PreferedUserId',
                                    'ModifiedById',
                                    'ModifiedTime',
                                    'CreatedById',
                                    'CreatedTime',
                                ]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _layoutGroups()
    {
        return $this->hasMany(HostLayoutGroupLayout::class, 'HostId', 'HostId');
    }


}
