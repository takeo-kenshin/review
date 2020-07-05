<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ReviewController extends Controller
{
    
    public function add(){
        
        return view('admin.review.create');
        
    }
    
    public function create(Request $request){
      
      return redirect('admin/review/create');
    } 
    
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
}
