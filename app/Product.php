<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Product extends Model
{
    
    protected $guarded=array('id');
    
    public static $rules=array(
        'title'=>'required',
        'body'=>'required',
        'syllabary'=>'required',
        );
        
    public function comments()
    {
        return $this->hasMany('App\Comment');
    } 
    
    public function users()
    {
        return $this->hasMany('App\User');
    } 
}
