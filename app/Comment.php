<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;

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
    
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
