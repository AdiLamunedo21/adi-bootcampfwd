<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //use hasFactory;
    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'delete_at',
    ];

    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'delete_at',


    ];

//one to msny
    public function type_user() {
    // 3 parameter (path model, field foreign key, field primary key from table has many/hasOne)
    return $this->belongsTo('App\Models\MasterData\TypeUser','type_user_id', 'id');

}
//one to msny
    public function user() {
    // 3 parameter (path model, field foreign key, field primary key from table has many/hasOne)
    return $this->belongsTo('App\Models\User','user_id', 'id');

}

}
