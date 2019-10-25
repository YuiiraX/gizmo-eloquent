<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\DepositTransaction
 *
 * @property int                                                                              $DepositTransactionId
 * @property int                                                                              $UserId
 * @property int                                                                              $Type
 * @property float                                                                            $Amount
 * @property float                                                                            $Balance
 * @property bool                                                                             $IsVoided
 * @property int|null                                                                         $ModifiedById
 * @property string|null                                                                      $ModifiedTime
 * @property int|null                                                                         $CreatedById
 * @property string                                                                           $CreatedTime
 * @property int|null                                                                         $ShiftId
 * @property int|null                                                                         $RegisterId
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                         $createdBy
 * @property-read \Yuiirax\Gizmo\Eloquent\UserMember                                                $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DepositPayment[] $depositPayments
 * @property-read int|null                                                                    $deposit_payments_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                         $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Payment[]        $payments
 * @property-read int|null                                                                    $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Refund[]         $refunds
 * @property-read int|null                                                                    $refunds_count
 * @property-read \Yuiirax\Gizmo\Eloquent\Register|null                                             $register
 * @property-read \Yuiirax\Gizmo\Eloquent\Shift|null                                                $shift
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction ofPeriod($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction ofType($type)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereDepositTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereIsVoided($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereShiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\DepositTransaction whereUserId($value)
 * @mixin \Eloquent
 */
class DepositTransaction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'DepositTransaction';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'DepositTransactionId';

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

    /*
     * Scopes
     */

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param                                       $type
     *
     * @return \Illuminate\Database\Eloquent\Builder mixed
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param                                       $start
     * @param                                       $end
     *
     * @return \Illuminate\Database\Eloquent\Builder mixed
     */
    public function scopeOfPeriod($query, $start, $end)
    {
        return $query->whereBetween('createdTime', [$start,
                                                    $end]);
    }


    /*
     * Relations
     */

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
    public function depositPayments()
    {
        return $this->hasMany(DepositPayment::class, 'DepositTransactionId', 'DepositTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class, 'DepositTransactionId', 'DepositTransactionId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds()
    {
        return $this->hasMany(Refund::class, 'DepositTransactionId', 'DepositTransactionId');
    }
}
