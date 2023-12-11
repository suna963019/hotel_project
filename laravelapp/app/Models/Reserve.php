<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }


    // public function getData()
    // {
    //     return $this->all();
    // }
    protected $guarded = array('id');

    public static $rules = array (
        // 'user_id'=>'required',
        // 'course_id'=>'required',
        'number'=>'required',
        'datetime'=>'required'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->number. '(' . $this->datetime . ')';
    }
 


    use HasFactory;
}
