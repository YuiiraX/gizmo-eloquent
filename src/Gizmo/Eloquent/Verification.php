<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\Verification
 *
 * @property int                                            $VerificationId
 * @property int                                            $TokenId
 * @property int|null                                       $UserId
 * @property int                                            $Status
 * @property int|null                                       $ModifiedById
 * @property string|null                                    $ModifiedTime
 * @property int|null                                       $CreatedById
 * @property string                                         $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null               $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null               $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null               $owner
 * @property-read \Yuiirax\Gizmo\Eloquent\Token                   $token
 * @property-read \Yuiirax\Gizmo\Eloquent\VerificationEmail       $verificationEmail
 * @property-read \Yuiirax\Gizmo\Eloquent\VerificationMobilePhone $verificationMobilePhone
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification whereTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Verification whereVerificationId($value)
 * @mixin \Eloquent
 */
class Verification extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Verification';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'VerificationId';

    /**
     * @var array
     */
    protected $fillable = ['TokenId',
                           'UserId',
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
    public function token()
    {
        return $this->belongsTo(Token::class, 'TokenId', 'TokenId');
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
    public function owner()
    {
        return $this->belongsTo(User::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function verificationEmail()
    {
        return $this->hasOne(VerificationEmail::class, 'VerificationId', 'VerificationId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function verificationMobilePhone()
    {
        return $this->hasOne(VerificationMobilePhone::class, 'VerificationId', 'VerificationId');
    }
}
