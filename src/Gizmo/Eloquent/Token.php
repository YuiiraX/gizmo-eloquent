<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\Token
 *
 * @property int                                                                            $TokenId
 * @property int|null                                                                       $UserId
 * @property string                                                                         $Value
 * @property string|null                                                                    $ConfirmationCode
 * @property int                                                                            $Type
 * @property int                                                                            $Status
 * @property string|null                                                                    $Expires
 * @property int|null                                                                       $ModifiedById
 * @property string|null                                                                    $ModifiedTime
 * @property int|null                                                                       $CreatedById
 * @property string                                                                         $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null                                               $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null                                               $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\User|null                                               $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Verification[] $verifications
 * @property-read int|null                                                                  $verifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereConfirmationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Token whereValue($value)
 * @mixin \Eloquent
 */
class Token extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Token';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'TokenId';

    /**
     * @var array
     */
    protected $fillable = ['UserId',
                           'Value',
                           'ConfirmationCode',
                           'Type',
                           'Status',
                           'Expires',
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
    public function owner()
    {
        return $this->belongsTo(User::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function verifications()
    {
        return $this->hasMany(Verification::class, 'TokenId', 'TokenId');
    }
}
