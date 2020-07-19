<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

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
    
    public function product_main_page(Request $request){
        
        $product=Product::find($request->id);
        if(empty($product)){
            abort(404);
        }
        return view('admin.review.product_page',['product_form'=>$product]);
    }
    
    public function add(Request $request){
        
        $product=Product::find($request->id);
        if(empty($product)){
            abort(404);
        }
        
        return view('admin.review.create',['product_form'=>$product]);
        
    }
    
    public function create(Request $request){
      
      $this->validate($request,Comment::$rules);
        $comment=new Comment;
        $form=$request->all();
        unset($form['_token']);
        $comment->fill($form);
        $comment->save();
        
      return redirect('admin/review/create');
    }
}
