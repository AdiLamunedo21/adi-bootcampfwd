<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //use hasFactory;
    use SoftDeletes;

    //declare table
    public $table = 'role';


    // this fiels must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'delete_at',
    ];

    // declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'delete_at',
    ];
//one to msny
    public function role_user() {
    // 2 parameter (path model, field foreign key)
    return $this->hasMany('App\Models\ManagementAccess\RoleUser','role_id');
}
//one to msny
    public function permission_role() {
    // 2 parameter (path model, field foreign key)
    return $this->hasMany('App\Models\ManagementAccess\PermissionRole','role_id');
}
}
