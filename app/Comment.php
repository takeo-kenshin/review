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
    
    public function users()
    {
        return $this->hasMany('App\User');
    } 
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
