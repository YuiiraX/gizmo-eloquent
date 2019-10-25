<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy
 *
 * @property int                                      $SecurityProfilePolicyId
 * @property int                                      $SecurityProfileId
 * @property int                                      $Type
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\SecurityProfile   $securityProfile
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy whereSecurityProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy whereSecurityProfilePolicyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy whereType($value)
 * @mixin \Eloquent
 */
class SecurityProfilePolicy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'SecurityProfilePolicy';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SecurityProfilePolicyId';

    /**
     * @var array
     */
    protected $fillable = ['SecurityProfileId',
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
