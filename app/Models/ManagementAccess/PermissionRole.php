<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    //use hasFactory;
    use SoftDeletes;

    //declare table
    public $table = 'permission_role';


    // this fiels must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'delete_at',
    ];

    // declare fillable
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'delete_at',


    ];
    //one to msny
    public function permission() {
    // 3 parameter (path model, field foreign key, field primary key from table has many/hasOne)
    return $this->belongsTo('App\Models\ManagementAccess\Permission','permission_id', 'id');

}

 //one to msny
    public function role() {
    // 3 parameter (path model, field foreign key, field primary key from table has many/hasOne)
    return $this->belongsTo('App\Models\ManagementAccess\Role','role_id', 'id');

}

}
