<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $guarded = array('id');

    public static $rules = array (
        'user_id'=>'required',
        'course_id'=>'required',
        'number'=>'required',
        'datetime'=>'required'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->namber . '(' . $this->datetime . ')';
    }
 


    use HasFactory;
}
