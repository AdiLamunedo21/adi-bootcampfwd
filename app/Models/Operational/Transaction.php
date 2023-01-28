<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
     //use hasFactory;
    use SoftDeletes;

    //declare table
    public $table = 'transaction';


    // this fiels must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'delete_at',
    ];

    // declare fillable
    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'delete_at',
    ];
        //one to msny
    public function appointment() {
    // 3 parameter (path model, field foreign key, field primary key from table has many/hasOne)
    return $this->belongsTo('App\Models\Operational\Appointment','appointment_id', 'id');

}
}
