<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function footer(){
    return view('footer');
    }
    
    public function about(){
        return view('about_us');
    }

    public function blog(){

        return view('blog');
        
    }

    public function minhaidade(($idade)($anoNascimento){
        $idade=date('y')-'1988';
        echo $idade;
        });

}


