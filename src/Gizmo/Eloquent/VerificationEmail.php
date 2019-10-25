<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\VerificationEmail
 *
 * @property int                                 $VerificationId
 * @property string                              $Email
 * @property-read \YuiiraX\Gizmo\Eloquent\Verification $verification
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VerificationEmail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VerificationEmail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VerificationEmail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VerificationEmail whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\VerificationEmail whereVerificationId($value)
 * @mixin \Eloquent
 */
class VerificationEmail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'VerificationEmail';

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
    protected $fillable = ['Email'];

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
