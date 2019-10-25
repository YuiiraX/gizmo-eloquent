<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\UserCreditLimit
 *
 * @property int                                      $UserId
 * @property float                                    $CreditLimit
 * @property bool                                     $IsEnabled
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember        $owner
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit whereCreditLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\UserCreditLimit whereUserId($value)
 * @mixin \Eloquent
 */
class UserCreditLimit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserCreditLimit';

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
    protected $fillable = ['CreditLimit',
                           'IsEnabled',
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
    public function owner()
    {
        return $this->belongsTo(UserMember::class, 'UserId', 'UserId');
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
}
