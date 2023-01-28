<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    //use hasFactory;
    use SoftDeletes;

    //declare table
    public $table = 'type_user';


    // this fiels must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'delete_at',
    ];

    // declare fillable
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'delete_at',
    ];
//one to msny
public function detail_user() {
    // 2 parameter (path model, field foreign key)
    return $this->hasMany('App\Models\ManagementAccess\DetailUser','type_user_id');

}


}
