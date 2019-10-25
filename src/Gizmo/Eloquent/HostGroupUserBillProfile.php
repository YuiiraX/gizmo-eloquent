<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile
 *
 * @property int                                $HostGroupUserBillProfileId
 * @property int                                $HostGroupId
 * @property int                                $UserGroupId
 * @property int                                $BillProfileId
 * @property bool                               $IsEnabled
 * @property-read \YuiiraX\Gizmo\Eloquent\BillProfile $billProfile
 * @property-read \YuiiraX\Gizmo\Eloquent\HostGroup   $hostGroup
 * @property-read \YuiiraX\Gizmo\Eloquent\UserGroup   $userGroup
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile whereBillProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile whereHostGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile whereHostGroupUserBillProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\HostGroupUserBillProfile whereUserGroupId($value)
 * @mixin \Eloquent
 */
class HostGroupUserBillProfile extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'HostGroupUserBillProfile';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HostGroupUserBillProfileId';

    /**
     * @var array
     */
    protected $fillable = ['HostGroupId',
                           'UserGroupId',
                           'BillProfileId',
                           'IsEnabled'];

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
    public function billProfile()
    {
        return $this->belongsTo(BillProfile::class, 'BillProfileId', 'BillProfileId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hostGroup()
    {
        return $this->belongsTo(HostGroup::class, 'HostGroupId', 'HostGroupId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userGroup()
    {
        return $this->belongsTo(UserGroup::class, 'UserGroupId', 'UserGroupId');
    }
}
