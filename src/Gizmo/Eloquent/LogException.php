<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\LogException
 *
 * @property int                        $LogId
 * @property mixed                      $ExceptionData
 * @property-read \Yuiirax\Gizmo\Eloquent\Log $log
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\LogException newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\LogException newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\LogException query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\LogException whereExceptionData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\LogException whereLogId($value)
 * @mixin \Eloquent
 */
class LogException extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'LogException';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'LogId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ExceptionData'];

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
    public function log()
    {
        return $this->belongsTo(Log::class, 'LogId', 'LogId');
    }
}
