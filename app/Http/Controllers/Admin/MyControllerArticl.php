<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class MyControllerArticl extends Controller
{
    //
    
    public function showArticles(){
        
        if(view()->exists('default.articles')){
            
            return view('default.articles')->with('title', 'All articles');
            
        }
        
    }
    
    public function showArticl($id = 'Null'){
        
        if(view()->exists('default.articl')){
            
            return view('default.articl')->withTitle('title', $id);
        }
        abort(404);
    }
    
    public function showAbout(){
        
        if(View::exists('default.about')){
            
            $arr = ['title'=>'About'];
            return view('default.about', $arr);
        }
        abort(404);
    } 
    
    
    
    
}
