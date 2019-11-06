<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyControllerContact extends Controller
{
    protected $request;


    public function __construct(Request $request) {
        $this->request=$request; 
   }
    
   public function showContact($id=2){
       
      // print_r($this->request->all());
       //print_r($this->request->input('name1', 'email'));
//       $path = $this->request->path();
//       $uri = $this->request->url();
//       $uriFull = $this->request->fullUrl();
       $method = $this->request->method();
//       $query_name= $this->request->query('name2', 'test');
//       $query_ar = $this->request->query();
       //$name = $this->request->page;

       
       //echo '<h1 style="margin-top:100px;"> '. $name.'</h1>';
       //dump($query_name);
       //echo '<h1 style="margin-top:100px;"> '. $path.'</h1>';
       //echo '<h1 style="margin-top:100px;"> '. $uri.'</h1>';
       //echo '<h1 style="margin-top:100px;"> '. $uriFull.'</h1>';
//       echo '<h1 style="margin-top:100px;"> ';
//      print_r( $query_ar);
//       print_r($this->request->except('name'));
//       echo '</h1>';
       

       
           
//           if(! $this->request->missing('name1')){
//                 echo '<h1 style="margin-top:100px;"> '.'missed site11' .'</h1>';
//           }else{
//               echo '<h1 style="margin-top:100px;"> '.'missed site else' .'</h1>';
//           }
//      
        $this->request->flash();
       
       
       if($this->request->isMethod('get')){
            echo '<h1 style="margin-top:100px;"> '. $method.'</h1>';
       }elseif ($this->request->isMethod('PUT')){
            echo '<h1 style="margin-top:100px;"> '. $method.'</h1>';
       }
       
       if(view()->exists('default.contact')){

           return view('default.contact',['title'=>'Contact']);
           
           }
       
       abort(404);
   }
    
}
