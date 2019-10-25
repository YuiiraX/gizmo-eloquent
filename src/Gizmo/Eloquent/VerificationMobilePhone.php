<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\VerificationMobilePhone
 *
 * @property int                                 $VerificationId
 * @property string                              $PhoneNumber
 * @property-read \Yuiirax\Gizmo\Eloquent\Verification $verification
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\VerificationMobilePhone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\VerificationMobilePhone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\VerificationMobilePhone query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\VerificationMobilePhone wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\VerificationMobilePhone whereVerificationId($value)
 * @mixin \Eloquent
 */
class VerificationMobilePhone extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'VerificationMobilePhone';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'VerificationId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['PhoneNumber'];

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
    public function verification()
    {
        return $this->belongsTo(Verification::class, 'VerificationId', 'VerificationId');
    }
}
