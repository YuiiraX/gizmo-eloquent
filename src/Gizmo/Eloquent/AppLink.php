<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\AppLink
 *
 * @property int                                      $AppLinkId
 * @property int                                      $AppId
 * @property string|null                              $Caption
 * @property string|null                              $Description
 * @property string                                   $Url
 * @property int                                      $DisplayOrder
 * @property string                                   $Guid
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\App               $app
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereAppLinkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppLink whereUrl($value)
 * @mixin \Eloquent
 */
class AppLink extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AppLink';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AppLinkId';

    /**
     * @var array
     */
    protected $fillable = ['AppId',
                           'Caption',
                           'Description',
                           'Url',
                           'DisplayOrder',
                           'Guid',
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
    public function app()
    {
        return $this->belongsTo(App::class, 'AppId', 'AppId');
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
