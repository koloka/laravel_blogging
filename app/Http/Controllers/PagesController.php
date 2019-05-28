<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'hellos';
        return view('page.index',)->with('title', $title);
    }
    public function about(){
        return view('page.about');
    }
    public function service(){
        $data = array(
            'title' => 'Service',
            'des' => 'i am service',
            'services' => ['game', 'study', 'school', 'talk', 'haha']
        );
        return view('page.service')->with($data);
    }


    // public function haha($name){
    //     return $name;
    // }
    
   
}
