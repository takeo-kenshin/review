<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    //
    public function product_index(Request $request){
        
        $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $products = Product::where('title', 'like','%'.$cond_title.'%')->get();
      } else {
          $products = Product::all()->sortBy('syllabary');
      }
        return view('front',['products'=>$products,'cond_title' => $cond_title]);
    }
    
    public function comment_index(Request $request,$id){
        
        $comments=DB::table('comments')->where('product_id','=',$id)->get();
        $average=DB::table('comments')->where('product_id','=',$id)->avg('score');
        $count=DB::table('comments')->where('product_id','=',$id)->count('id');
        
        return view('front_product_page',['product'=>Product::findOrFail($id),'comments'=>$comments,'average'=>$average,'count'=>$count]);
    }
}
