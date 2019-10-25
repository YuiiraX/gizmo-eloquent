<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\UserMember
 *
 * @property int                                                                                         $UserId
 * @property string                                                                                      $Username
 * @property string|null                                                                                 $Email
 * @property int                                                                                         $UserGroupId
 * @property bool|null                                                                                   $IsNegativeBalanceAllowed
 * @property bool                                                                                        $IsPersonalInfoRequested
 * @property int|null                                                                                    $BillingOptions
 * @property string|null                                                                                 $EnableDate
 * @property string|null                                                                                 $DisabledDate
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ReservationHost[]           $_hostPreferred
 * @property-read int|null                                                                               $_host_preferred_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserNote[]                  $_notes
 * @property-read int|null                                                                               $_notes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppRating[]                 $_ratedApps
 * @property-read int|null                                                                               $_rated_apps_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ReservationHost[]           $_reservationPreferred
 * @property-read int|null                                                                               $_reservation_preferred_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ReservationUser[]           $_reservations
 * @property-read int|null                                                                               $_reservations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLineEntry[] $_waitingHostGroups
 * @property-read int|null                                                                               $_waiting_host_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLineEntry[] $_waitingLines
 * @property-read int|null                                                                               $_waiting_lines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AppStat[]                   $appStats
 * @property-read int|null                                                                               $app_stats_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\AssetTransaction[]          $assetTransactions
 * @property-read int|null                                                                               $asset_transactions_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserCreditLimit                                                      $creditLimit
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\DepositPayment[]            $depositPayments
 * @property-read int|null                                                                               $deposit_payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\DepositTransaction[]        $depositTransactions
 * @property-read int|null                                                                               $deposit_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Host[]                      $hostPreferred
 * @property-read int|null                                                                               $host_preferred_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoiceLine[]               $invoiceLines
 * @property-read int|null                                                                               $invoice_lines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoicePayment[]            $invoicePayments
 * @property-read int|null                                                                               $invoice_payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Invoice[]                   $invoices
 * @property-read int|null                                                                               $invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Note[]                      $notes
 * @property-read int|null                                                                               $notes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductOL[]                 $orderLines
 * @property-read int|null                                                                               $order_lines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\ProductOrder[]              $orders
 * @property-read int|null                                                                               $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Payment[]                   $payments
 * @property-read int|null                                                                               $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\PointTransaction[]          $pointTransactions
 * @property-read int|null                                                                               $point_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\App[]                       $ratedApps
 * @property-read int|null                                                                               $rated_apps_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Reservation[]               $reservationPreferred
 * @property-read int|null                                                                               $reservation_preferred_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Reservation[]               $reservations
 * @property-read int|null                                                                               $reservations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Reservation[]               $reserved
 * @property-read int|null                                                                               $reserved_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UsageSession[]              $usageSessions
 * @property-read int|null                                                                               $usage_sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Usage[]                     $usages
 * @property-read int|null                                                                               $usages_count
 * @property-read \YuiiraX\Gizmo\Eloquent\User                                                                 $user
 * @property-read \YuiiraX\Gizmo\Eloquent\UserGroup                                                            $userGroup
 * @property-read \YuiiraX\Gizmo\Eloquent\UserGuest                                                            $userGuest
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserSessionChange[]         $userSessionChanges
 * @property-read int|null                                                                               $user_session_changes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserSession[]               $userSessions
 * @property-read int|null                                                                               $user_sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostGroup[]                 $waitingHostGroups
 * @property-read int|null                                                                               $waiting_host_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\HostGroupWaitingLine[]      $waitingLines
 * @property-read int|null                                                                               $waiting_lines_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereBillingOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereDisabledDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereEnableDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereIsNegativeBalanceAllowed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereIsPersonalInfoRequested($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereUserGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserMember whereUsername($value)
 * @mixin \Eloquent
 */
class UserMember extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserMember';

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
    protected $fillable = ['Username',
                           'Email',
                           'UserGroupId',
                           'IsNegativeBalanceAllowed',
                           'IsPersonalInfoRequested',
                           'BillingOptions',
                           'EnableDate',
                           'DisabledDate'];

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
    public function user()
    {
        return $this->belongsTo(User::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userGroup()
    {
        return $this->belongsTo(UserGroup::class, 'UserGroupId', 'UserGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function creditLimit()
    {
        return $this->hasOne(UserCreditLimit::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userGuest()
    {
        return $this->hasOne(UserGuest::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appStats()
    {
        return $this->hasMany(AppStat::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assetTransactions()
    {
        return $this->hasMany(AssetTransaction::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depositPayments()
    {
        return $this->hasMany(DepositPayment::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depositTransactions()
    {
        return $this->hasMany(DepositTransaction::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceLines()
    {
        return $this->hasMany(InvoiceLine::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicePayments()
    {
        return $this->hasMany(InvoicePayment::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pointTransactions()
    {
        return $this->hasMany(PointTransaction::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderLines()
    {
        return $this->hasMany(ProductOL::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(ProductOrder::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reserved()
    {
        return $this->hasMany(Reservation::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usages()
    {
        return $this->hasMany(Usage::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usageSessions()
    {
        return $this->hasMany(UsageSession::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userSessions()
    {
        return $this->hasMany(UserSession::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userSessionChanges()
    {
        return $this->hasMany(UserSessionChange::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ratedApps()
    {
        return $this->belongsToMany(App::class,
                                    'AppRating',
                                    'UserId',
                                    'AppId')
                    ->as('options')
                    ->using(AppRating::class)
                    ->withPivot(['Value',
                                 'Date']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function waitingHostGroups()
    {
        return $this->belongsToMany(HostGroup::class,
                                    'HostGroupWaitingLineEntry',
                                    'UserId',
                                    'HostGroupId')
                    ->as('options')
                    ->using(HostGroupWaitingLineEntry::class)
                    ->withPivot(['Position',
                                 'IsManualPosition',
                                 'TimeInLine',
                                 'ReadyTime',
                                 'IsReadyTimedOut',
                                 'State',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function waitingLines()
    {
        return $this->belongsToMany(HostGroupWaitingLine::class,
                                    'HostGroupWaitingLineEntry',
                                    'UserId',
                                    'HostGroupId',
                                    'UserId',
                                    'HosGroupId')
                    ->as('options')
                    ->using(HostGroupWaitingLineEntry::class)
                    ->withPivot(['Position',
                                 'IsManualPosition',
                                 'TimeInLine',
                                 'ReadyTime',
                                 'IsReadyTimedOut',
                                 'State',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function hostPreferred()
    {
        return $this->belongsToMany(Host::class,
                                    'ReservationHost',
                                    'PreferredUserId',
                                    'HostId',
                                    'UserId',
                                    'HostId')
                    ->as('options')
                    ->using(ReservationHost::class)
                    ->withPivot(['ReservationId',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reservationPreferred()
    {
        return $this->belongsToMany(Reservation::class,
                                    'ReservationHost',
                                    'PreferredUserId',
                                    'ReservationId')
                    ->as('options')
                    ->using(ReservationHost::class)
                    ->withPivot(['HostId',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class,
                                    'ReservationUser',
                                    'UserId',
                                    'ReservationId')
                    ->as('options')
                    ->using(ReservationUser::class)
                    ->withPivot(['ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function notes()
    {
        return $this->belongsToMany(Note::class,
                                    'UserNote',
                                    'UserId',
                                    'NoteId')
                    ->as('options')
                    ->using(UserNote::class)
                    ->withPivot(['UserNoteOptions']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _ratedApps()
    {
        return $this->hasMany(AppRating::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _waitingHostGroups()
    {
        return $this->hasMany(HostGroupWaitingLineEntry::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _waitingLines()
    {
        return $this->hasMany(HostGroupWaitingLineEntry::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _hostPreferred()
    {
        return $this->hasMany(ReservationHost::class, 'PreferedUserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _reservationPreferred()
    {
        return $this->hasMany(ReservationHost::class, 'PreferedUserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _reservations()
    {
        return $this->hasMany(ReservationUser::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _notes()
    {
        return $this->hasMany(UserNote::class, 'UserId', 'UserId');
    }
}
