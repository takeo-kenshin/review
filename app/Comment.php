<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded=array('id');
    
    public static $rules=array(
        'product_id'=>'required',
        'user_id'=>'required',
        'score'=>'required',
        'body'=>'required',
        );
    
    public function products()
    {
        return $this->hasMany('App\Product');
    } 
    
    public function users()
    {
        return $this->hasMany('App\User');
    } 
}
