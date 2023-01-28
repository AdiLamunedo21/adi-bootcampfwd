<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
     //use hasFactory;
    use SoftDeletes;

    //declare table
    public $table = 'doctor';


    // this fiels must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'delete_at',
    ];

    // declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'delete_at',
    ];
    //one to msny
public function specialist() {
    // 3 parameter (path model, field foreign key, field primary key from table has many/hasOne)
    return $this->belongsTo('App\Models\MasterData\Specialist','specialist_id', 'id');

}

//one to msny
public function appointment() {
    // 2 parameter (path model, field foreign key)
    return $this->hasMany('App\Models\Operational\Appointment','doctor_id');
}

}
