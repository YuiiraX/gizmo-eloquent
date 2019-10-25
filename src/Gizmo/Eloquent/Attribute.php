<?php

namespace YuiiraX\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * YuiiraX\Gizmo\Eloquent\Attribute
 *
 * @property int                                                                             $AttributeId
 * @property string                                                                          $Name
 * @property string|null                                                                     $FriendlyName
 * @property int|null                                                                        $ModifiedById
 * @property string|null                                                                     $ModifiedTime
 * @property int|null                                                                        $CreatedById
 * @property string                                                                          $CreatedTime
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\UserAttribute[] $_users
 * @property-read int|null                                                                   $_users_count
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                        $createdBy
 * @property-read \YuiiraX\Gizmo\Eloquent\UserOperator|null                                        $modifiedBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\YuiiraX\Gizmo\Eloquent\User[]          $users
 * @property-read int|null                                                                   $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute whereCreatedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute whereFriendlyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute whereModifiedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute whereModifiedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\YuiiraX\Gizmo\Eloquent\Attribute whereName($value)
 * @mixin \Eloquent
 */
class Attribute extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Attribute';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'AttributeId';

    /**
     * @var array
     */
    protected $fillable = ['Name',
                           'FriendlyName',
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

    public function users()
    {
        return $this->belongsToMany(User::class,
                                    'UserAttribute',
                                    'AttributeId',
                                    'UserId')
                    ->as($this->translateAttributeName($this->Name))
                    ->using(UserAttribute::class)
                    ->withPivot(['UserAttributeId',
                                 'Value',
                                 'CreatedById',
                                 'ModifiedTime',
                                 'CreatedTime',
                                 'ModifiedById']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function _users()
    {
        return $this->hasMany(UserAttribute::class, 'AttributeId', 'AttributeId');
    }

    /**
     * Translate Attributes to a more readable form for use as accessor
     *
     * @param $name
     *
     * @return string
     */
    private function translateAttributeName($name)
    {
        switch ($name) {
            case "ATTRIBUTE_NAME_CGA_NICK_NAME":
                return "CGA_Nickname";
            case "ATTRIBUTE_NAME_CGA_SESSION_ID":
                return "CGA_SessionId";
            case "ATTRIBUTE_NAME_CGA_USER_ID":
                return "CGA_UserId";
            default:
                return $name;
        }
    }

}
