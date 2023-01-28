<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    //use hasFactory;
    use SoftDeletes;

    //declare table
    public $table = 'consultation';


    // this fiels must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'delete_at',
    ];

    // declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'delete_at',
    ];
    //one to msny
    public function appointment() {
    // 2 parameter (path model, field foreign key)
    return $this->hasMany('App\Models\Operational\Appointment','consultation_id');

}

}
