<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\PointTransaction
 *
 * @property int                                                                           $PointTransactionId
 * @property int                                                                           $UserId
 * @property int                                                                           $Type
 * @property int                                                                           $Amount
 * @property int                                                                           $Balance
 * @property bool                                                                          $IsVoided
 * @property int|null                                                                      $ModifiedById
 * @property string|null                                                                   $ModifiedTime
 * @property int|null                                                                      $CreatedById
 * @property string                                                                        $CreatedTime
 * @property int|null                                                                      $ShiftId
 * @property int|null                                                                      $RegisterId
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                      $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserMember                                             $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\InvoiceLine[] $invoiceLines
 * @property-read int|null                                                                 $invoice_lines_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                      $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Payment[]     $payments
 * @property-read int|null                                                                 $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\Refund[]      $refunds
 * @property-read int|null                                                                 $refunds_count
 * @property-read \YuiiraX\Gizmo\Eloquent\Register|null                                          $register
 * @property-read \YuiiraX\Gizmo\Eloquent\Shift|null                                             $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereIsVoided($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction wherePointTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\PointTransaction whereUserId($value)
 * @mixin \Eloquent
 */
class PointTransaction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'PointTransaction';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PointTransactionId';

    /**
     * @var array
     */
    protected $fillable = ['UserId',
                           'Type',
                           'Amount',
                           'Balance',
                           'IsVoided',
                           'ModifiedById',
                           'ModifiedTime',
                           'CreatedById',
                           'CreatedTime',
                           'ShiftId',
                           'RegisterId'];

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
    public function customer()
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceLines()
    {
        return $this->hasMany(InvoiceLine::class, 'PointsTransactionId', 'PointTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class, 'PointTransactionId', 'PointTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds()
    {
        return $this->hasMany(Refund::class, 'PointTransactionId', 'PointTransactionId');
    }
}
