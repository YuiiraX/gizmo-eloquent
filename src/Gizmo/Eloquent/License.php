<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\License
 *
 * @property int                                                                          $LicenseId
 * @property string                                                                       $Name
 * @property string                                                                       $Assembly
 * @property string                                                                       $Plugin
 * @property mixed|null                                                                   $Settings
 * @property string                                                                       $Guid
 * @property int|null                                                                     $ModifiedById
 * @property string|null                                                                  $ModifiedTime
 * @property int|null                                                                     $CreatedById
 * @property string                                                                       $CreatedTime
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                     $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExe[]     $exes
 * @property-read int|null                                                                $exes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\LicenseKey[] $keys
 * @property-read int|null                                                                $keys_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                     $modifiedBy
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereAssembly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereLicenseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License wherePlugin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\License whereSettings($value)
 * @mixin \Eloquent
 */
class License extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'License';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'LicenseId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'Assembly',
                           'Plugin',
                           'Settings',
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
    public function keys()
    {
        return $this->hasMany(LicenseKey::class, 'LicenseId', 'LicenseId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function exes()
    {
        return $this->belongsToMany(AppExe::class,
                                    AppExeLicense::class,
                                    'LicenseId',
                                    'AppExeId')
                    ->as('options')
                    ->using(AppExeLicense::class)
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    public function _exes()
    {
        $this->hasMany(AppExeLicense::class, 'LicenseId', 'LicenseId');
    }
}
