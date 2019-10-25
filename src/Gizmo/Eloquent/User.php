<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\User
 *
 * @property int                                                                                         $UserId
 * @property string|null                                                                                 $FirstName
 * @property string|null                                                                                 $LastName
 * @property string|null                                                                                 $BirthDate
 * @property string|null                                                                                 $Address
 * @property string|null                                                                                 $City
 * @property string|null                                                                                 $Country
 * @property string|null                                                                                 $PostCode
 * @property string|null                                                                                 $Phone
 * @property string|null                                                                                 $MobilePhone
 * @property int                                                                                         $Sex
 * @property bool                                                                                        $IsDeleted
 * @property bool                                                                                        $IsDisabled
 * @property string                                                                                      $Guid
 * @property string|null                                                                                 $SmartCardUID
 * @property int|null                                                                                    $ModifiedById
 * @property string|null                                                                                 $ModifiedTime
 * @property int|null                                                                                    $CreatedById
 * @property string                                                                                      $CreatedTime
 * @property string|null                                                                                 $Identification
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserAttribute[]             $_attributes
 * @property-read int|null                                                                               $_attributes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Attribute[]                 $attributes
 * @property-read int|null                                                                               $attributes_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                                    $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Reservation[]               $createdReservation
 * @property-read int|null                                                                               $created_reservation_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ReservationHost[]           $createdReservationHost
 * @property-read int|null                                                                               $created_reservation_host_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ReservationUser[]           $createdReservationUser
 * @property-read int|null                                                                               $created_reservation_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Token[]                     $createdToken
 * @property-read int|null                                                                               $created_token_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserPicture[]               $createdUserPicture
 * @property-read int|null                                                                               $created_user_picture_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserSession[]               $createdUserSession
 * @property-read int|null                                                                               $created_user_session_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserSessionChange[]         $createdUserSessionChange
 * @property-read int|null                                                                               $created_user_session_change_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Verification[]              $createdVerification
 * @property-read int|null                                                                               $created_verification_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserCredential                                                       $credential
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null                                                            $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry[] $modifiedHostGroupWaitingLineEntry
 * @property-read int|null                                                                               $modified_host_group_waiting_line_entry_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Reservation[]               $modifiedReservation
 * @property-read int|null                                                                               $modified_reservation_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ReservationHost[]           $modifiedReservationHost
 * @property-read int|null                                                                               $modified_reservation_host_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ReservationUser[]           $modifiedReservationUser
 * @property-read int|null                                                                               $modified_reservation_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Token[]                     $modifiedToken
 * @property-read int|null                                                                               $modified_token_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\User[]                      $modifiedUser
 * @property-read int|null                                                                               $modified_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserPicture[]               $modifiedUserPicture
 * @property-read int|null                                                                               $modified_user_picture_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Verification[]              $modifiedVerification
 * @property-read int|null                                                                               $modified_verification_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserPermission[]            $permissions
 * @property-read int|null                                                                               $permissions_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserPicture                                                          $picture
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Token[]                     $tokens
 * @property-read int|null                                                                               $tokens_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember                                                           $userMember
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator                                                         $userOperator
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Verification[]              $verifications
 * @property-read int|null                                                                               $verifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereIdentification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereIsDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereMobilePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User wherePostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereSmartCardUID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\User whereUserId($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UserId';

    /**
     * @var array
     */
    protected $fillable = ['FirstName',
                           'LastName',
                           'BirthDate',
                           'Address',
                           'City',
                           'Country',
                           'PostCode',
                           'Phone',
                           'MobilePhone',
                           'Sex',
                           'IsDeleted',
                           'IsDisabled',
                           'Guid',
                           'SmartCardUID',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'Identification'];

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
        return $this->belongsTo(UserOperator::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy()
    {
        return $this->belongsTo(User::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function credential()
    {
        return $this->hasOne(UserCredential::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userMember()
    {
        return $this->hasOne(UserMember::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userOperator()
    {
        return $this->hasOne(UserOperator::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function picture()
    {
        return $this->hasOne(UserPicture::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tokens()
    {
        return $this->hasMany(Token::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissions()
    {
        return $this->hasMany(UserPermission::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function verifications()
    {
        return $this->hasMany(Verification::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class,
                                    'UserAttribute',
                                    'UserId',
                                    'AttributeId')
                    ->as('values')
                    ->using(UserAttribute::class)
                    ->withPivot(['Value',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _attributes()
    {
        return $this->hasMany(UserAttribute::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedHostGroupWaitingLineEntry()
    {
        return $this->hasMany(HostGroupWaitingLineEntry::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdReservation()
    {
        return $this->hasMany(Reservation::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedReservation()
    {
        return $this->hasMany(Reservation::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdReservationHost()
    {
        return $this->hasMany(ReservationHost::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedReservationHost()
    {
        return $this->hasMany(ReservationHost::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdReservationUser()
    {
        return $this->hasMany(ReservationUser::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedReservationUser()
    {
        return $this->hasMany(ReservationUser::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdToken()
    {
        return $this->hasMany(Token::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedToken()
    {
        return $this->hasMany(Token::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedUser()
    {
        return $this->hasMany(User::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserPicture()
    {
        return $this->hasMany(UserPicture::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedUserPicture()
    {
        return $this->hasMany(UserPicture::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserSession()
    {
        return $this->hasMany(UserSession::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserSessionChange()
    {
        return $this->hasMany(UserSessionChange::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdVerification()
    {
        return $this->hasMany(Verification::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedVerification()
    {
        return $this->hasMany(Verification::class, 'ModifiedById', 'UserId');
    }
}
