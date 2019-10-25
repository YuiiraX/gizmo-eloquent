<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\PersonalFile
 *
 * @property int                                                                                  $PersonalFileId
 * @property string                                                                               $Name
 * @property string|null                                                                          $Caption
 * @property string|null                                                                          $Description
 * @property string                                                                               $Source
 * @property int                                                                                  $Activation
 * @property int                                                                                  $Deactivation
 * @property int                                                                                  $MaxQuota
 * @property int                                                                                  $CompressionLevel
 * @property string|null                                                                          $ExcludeDirectories
 * @property string|null                                                                          $ExcludeFiles
 * @property string|null                                                                          $IncludeDirectories
 * @property string|null                                                                          $IncludeFiles
 * @property string                                                                               $Guid
 * @property int                                                                                  $Type
 * @property int                                                                                  $Options
 * @property bool                                                                                 $Accessible
 * @property int|null                                                                             $ModifiedById
 * @property string|null                                                                          $ModifiedTime
 * @property int|null                                                                             $CreatedById
 * @property string                                                                               $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExePersonalFile[] $_exes
 * @property-read int|null                                                                        $_exes_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                             $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExe[]             $exes
 * @property-read int|null                                                                        $exes_count
 * @property-read \Yuiirax\Gizmo\Eloquent\UserOperator|null                                             $modifiedBy
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereAccessible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereActivation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereCompressionLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereDeactivation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereExcludeDirectories($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereExcludeFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereIncludeDirectories($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereIncludeFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereMaxQuota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile wherePersonalFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\PersonalFile whereType($value)
 * @mixin \Eloquent
 */
class PersonalFile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'PersonalFile';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PersonalFileId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'Caption',
                           'Description',
                           'Source',
                           'Activation',
                           'Deactivation',
                           'MaxQuota',
                           'CompressionLevel',
                           'ExcludeDirectories',
                           'ExcludeFiles',
                           'IncludeDirectories',
                           'IncludeFiles',
                           'Guid',
                           'Type',
                           'Options',
                           'Accessible',
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

    public function exes()
    {
        return $this->belongsToMany(AppExe::class,
                                    'AppExePersonalFile',
                                    'PersonalFileId',
                                    'AppExeId')
                    ->as('options')
                    ->using(AppExePersonalFile::class)
                    ->withPivot(['UseOrder',
                                 'ModifiedById',
                                 'ModifiedTime',
                                 'CreatedById',
                                 'CreatedTime']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _exes()
    {
        return $this->hasMany(AppExePersonalFile::class, 'PersonalFileId', 'PersonalFileId');
    }
}
