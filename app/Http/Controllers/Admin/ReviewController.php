<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Comment;
use App\User;

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
        
        return redirect('admin/review/page');
        
    }
    
    public function product_index(Request $request){
        
        $posts=Product::all();
                        
        return view('welcome',['posts'=>$posts]);
    }
    
    public function product_main_page($id){
        
        return view('admin.review.product_page',['product'=>Product::findOrFail($id)]);
        
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
        
      return redirect('admin/review/product_page/{id}/create',['product'=>Product::findOrFail($id)]);
    }
    
    public function comment_index(Request $request,$id){
        
        $comments=Comment::all();
        $comments= \App\Comment::latest()->get();                
        return view('admin.review.product_page',['product'=>Product::findOrFail($id),'comments'=>$comments]);
    }
    
    public function comment_delete(Request $request,$id){
        
        $comment=Comment::find($request->id);
        
        return redirect('admin/review/product_page/{id}',['product'=>Product::findOrFail($id)]);
    }
}
