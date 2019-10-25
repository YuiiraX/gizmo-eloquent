<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Yuiirax\Gizmo\Eloquent\AppGroupApp
 *
 * @property int                             $AppGroupId
 * @property int                             $AppId
 * @property-read \Yuiirax\Gizmo\Eloquent\App      $app
 * @property-read \Yuiirax\Gizmo\Eloquent\AppGroup $appGroup
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppGroupApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppGroupApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppGroupApp query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppGroupApp whereAppGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\AppGroupApp whereAppId($value)
 * @mixin \Eloquent
 */
class AppGroupApp extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AppGroupApp';

    /**
     * @var array
     */
    protected $fillable = [];

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
    public function appGroup()
    {
        return $this->belongsTo(AppGroup::class, 'AppGroupId', 'AppGroupId');
    }
}
