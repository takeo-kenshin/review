<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReviewController extends Controller
{

    public function page(){
        
        return view('admin.review.page');
        
    }
    
    public function product_page(Request $request){
        
        $this->validate($request,Product::$rules);
        $product=new Product;
        $form=$request->all();
        unset($form['_token']);
        $product->fill($form);
        $product->save();
        
        return redirect('/index');
        
    }
    
    public function product_index(Request $request){
        
        $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $products = Product::where('title', 'like','%'.$cond_title.'%')->get();
      } else {
          $products = Product::all()->sortBy('syllabary');
      }
        
        return view('welcome',['products'=>$products,'cond_title' => $cond_title]);
    }
    
    
    public function product_edit(Request $request,$id){
        
        $product=Product::find($request->id);
        
        return view('admin.review.page_edit',['product'=>Product::findOrFail($id)]);
    }
    
    public function product_update(Request $request,$id){
        
        $this->validate($request,Product::$rules);
        $product=Product::find($request->id);
        $form=$request->all();
        unset($form['_token']);
        $product->fill($form);
        $product->save();
        
        return redirect('admin/review/{id}/page',['product'=>Product::findOrFail($id)]);
    }
    
    public function product_delete(Request $request,$id){
        
        $products=DB::table('products')->where('id','=',$id)->delete();
        
        return redirect()->route('index');
    }
    
    
    public function comment(Request $request,$id){
        
        $users=User::all();
        
        return view('admin.review.create',['product'=>Product::findOrFail($id),'users'=>$users]);
        
    }
    
    public function comment_create(Request $request,$id){
      
      $this->validate($request,Comment::$rules);
        $comment=new Comment;
        $form=$request->all();
        unset($form['_token']);
        $comment->fill($form);
        $comment->save();
        
      return redirect()->route('product.show',['id'=>$id]);
    }
    
    public function comment_index(Request $request,$id){
        
        $comments=DB::table('comments')->where('product_id','=',$id)->get();
        $average=DB::table('comments')->where('product_id','=',$id)->avg('score');
        $count=DB::table('comments')->where('product_id','=',$id)->count('id');
        
        return view('admin.review.product_page',['product'=>Product::findOrFail($id),'comments'=>$comments,'average'=>$average,'count'=>$count]);
    }
    
    public function comment_delete(Request $request,$id,$post){
        
        $comments=DB::table('comments')->where('id','=',$post)->delete();
        
        return redirect()->route('product.show',['id'=>$id]);
    }
    
}
