<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    //use hasFactory;
    use SoftDeletes;

    //declare table
    public $table = 'role_user';


    // this fiels must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'delete_at',
    ];

    // declare fillable
    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'delete_at',
    ];

    //one to msny
    public function user() {
    // 3 parameter (path model, field foreign key, field primary key from table has many/hasOne)
    return $this->belongsTo('App\Models\User','user_id', 'id');

}

 //one to msny
    public function role() {
    // 3 parameter (path model, field foreign key, field primary key from table has many/hasOne)
    return $this->belongsTo('App\Models\ManagementAccess\Role','role_id', 'id');

}
}
