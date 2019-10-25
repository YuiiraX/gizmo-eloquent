<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\Log
 *
 * @property int                                 $LogId
 * @property string                              $Time
 * @property int|null                            $HostNumber
 * @property string|null                         $Hostname
 * @property int                                 $ModuleType
 * @property string|null                         $ModuleVersion
 * @property int                                 $Category
 * @property int                                 $MessageType
 * @property string                              $Message
 * @property-read \Yuiirax\Gizmo\Eloquent\LogException $exception
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereHostNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereHostname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereMessageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereModuleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereModuleVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\Log whereTime($value)
 * @mixin \Eloquent
 */
class Log extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'LogId';

    /**
     * @var array
     */
    protected $fillable = ['Time',
                           'HostNumber',
                           'Hostname',
                           'ModuleType',
                           'ModuleVersion',
                           'Category',
                           'MessageType',
                           'Message'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exception()
    {
        return $this->hasOne(LogException::class, 'LogId', 'LogId');
    }
}
