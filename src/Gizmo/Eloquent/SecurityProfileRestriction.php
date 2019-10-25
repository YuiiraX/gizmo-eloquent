<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction
 *
 * @property int                                      $SecurityProfileRestrictionId
 * @property int                                      $SecurityProfileId
 * @property string                                   $Parameter
 * @property int                                      $Type
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @property-read \YuiiraX\Gizmo\Eloquent\SecurityProfile   $securityProfile
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction whereParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction whereSecurityProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction whereSecurityProfileRestrictionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\SecurityProfileRestriction whereType($value)
 * @mixin \Eloquent
 */
class SecurityProfileRestriction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'SecurityProfileRestriction';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SecurityProfileRestrictionId';

    /**
     * @var array
     */
    protected $fillable = ['SecurityProfileId',
                           'Parameter',
                           'Type',
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
    public function securityProfile()
    {
        return $this->belongsTo(SecurityProfile::class, 'SecurityProfileId', 'SecurityProfileId');
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
