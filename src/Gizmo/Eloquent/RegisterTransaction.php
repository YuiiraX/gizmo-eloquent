<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\RegisterTransaction
 *
 * @property int                                      $RegisterTransactionId
 * @property int                                      $RegisterId
 * @property int|null                                 $ShiftId
 * @property float                                    $Amount
 * @property int                                      $Type
 * @property string|null                              $Note
 * @property int|null                                 $ModifiedById
 * @property string|null                              $ModifiedTime
 * @property int|null                                 $CreatedById
 * @property string                                   $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null $modifiedBy
 * @property-read \Yuiirax\Gizmo\Eloquent\Register          $register
 * @property-read \Yuiirax\Gizmo\Eloquent\Shift|null        $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereRegisterTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\RegisterTransaction whereType($value)
 * @mixin \Eloquent
 */
class RegisterTransaction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'RegisterTransaction';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'RegisterTransactionId';

    /**
     * @var array
     */
    protected $fillable = ['RegisterId',
                           'ShiftId',
                           'Amount',
                           'Type',
                           'Note',
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
    public function register()
    {
        return $this->belongsTo(Register::class, 'RegisterId', 'RegisterId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shift()
    {
        return $this->belongsTo(Shift::class, 'ShiftId', 'ShiftId');
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
