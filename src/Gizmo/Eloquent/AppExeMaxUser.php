<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\AppExeMaxUser
 *
 * @property int                                      $AppExeMaxUserId
 * @property int                                      $AppExeId
 * @property int                                      $Mode
 * @property int|null                                 $MaxUsers
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\AppExe            $appExe
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser whereAppExeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser whereAppExeMaxUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser whereMaxUsers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser whereModifiedTime($value)
 * @mixin \Eloquent
 */
class AppExeMaxUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AppExeMaxUser';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AppExeMaxUserId';

    /**
     * @var array
     */
    protected $fillable = ['AppExeId',
                           'Mode',
                           'MaxUsers',
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
    public function appExe()
    {
        return $this->belongsTo(AppExe::class, 'AppExeId', 'AppExeId');
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
